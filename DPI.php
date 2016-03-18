public class DPI{
/**
     * @param string $filename
     * @return array
     * @throws Exception
     */
    public static function getImageDpi($filename)
    {
        if (!empty($filename)
            && file_exists($filename)
        ) {
            $fileMime = self::getFileMimeType($filename);

            if ($fileMime == ‘image/jpeg; charset=binary’
                || $fileMime == ‘image/jpg; charset=binary’
                || $fileMime == ‘image/jpeg2; charset=binary’
            ) {
                return self::getImageJpgDpi($filename);
            } else if ($fileMime == ‘image/png; charset=binary’) {
                return self::getImagePngDpi($filename);
            } else {
                return array(
                    ‘x’ => 72,
                    ‘y’ => 72,
                );
            }

        } else {
            Throw new \Exception(‘Invalid parameters’);
        }
    }

    /**
     * Uses unix command file -bi for determining file typ.
     *
     * jpeg = image/jpeg; charset=binary
     * gif = image/gif; charset=binary
     * pdf = application/pdf; charset=binary
     *
     * @static
     * @param string $absolutePath
     * @throws Exception
     * @return string|bool
     */
    public static function getFileMimeType($absolutePath)
    {
        if (!empty($absolutePath)) {
            if (file_exists($absolutePath)) {
                if ($return = exec(
                    ‘file -bi — ‘ . escapeshellarg($absolutePath))
                ) {
                    return $return;
                }
            }
        } else {
            Throw new Exception(
                ‘Invalid parameters for ‘ . __FUNCTION__
                . ‘ in ‘ . __FILE__);
        }
        return false;
    }

    /**
     * @param string $filename
     * @return array
     * @throws Exception
     */
    public static function getImageJpgDpi($filename)
    {
        if (!empty($filename)
            && file_exists($filename)
        ) {

            $dpi = 0;
            $fp = @fopen($filename, ‘rb’);

            if ($fp) {
                if (fseek($fp, 6) == 0)
                {
                    if (($bytes = fread($fp, 16)) !== false)
                    {
                        if (substr($bytes, 0, 4) == "JFIF")
                        {
                            $JFIF_density_unit = ord($bytes[7]);
                            $JFIF_X_density = ord($bytes[8])*256 + ord($bytes[9]);
                            $JFIF_Y_density = ord($bytes[10])*256 + ord($bytes[11]);

                            if ($JFIF_X_density == $JFIF_Y_density)
                            {
                                if ($JFIF_density_unit == 1) {
                                    $dpi = $JFIF_X_density;
                                } else if ($JFIF_density_unit == 2) {
                                    $dpi = $JFIF_X_density * 2.54;
                                }
                            }
                        }
                    }
                }
                fclose($fp);
            }

            if (empty($dpi)) {
                if ($exifDpi = self::getImageDpiFromExif($filename)) {
                    $dpi = $exifDpi;
                }
            }

            if (!empty($dpi)) {
                return array(
                    ‘x’ => $dpi,
                    ‘y’ => $dpi,
                );
            } else {
                return array(
                    ‘x’ => 72,
                    ‘y’ => 72,
                );
            }

        } else {
            Throw new \Exception(‘Invalid parameters’);
        }
    }

    /**
     * @static
     * @param string $filename
     * @return array
     * @throws Exception
     */
    public static function getImagePngDpi($filename)
    {
        if (!empty($filename)
            && file_exists($filename)
        ) {

            $fh = fopen($filename, ‘rb’);

            if (!$fh) {
                return false;
            }

            $buf = array();

            $x = 0;
            $y = 0;
            $units = 0;

            while(!feof($fh))
            {
                array_push($buf, ord(fread($fh, 1)));
                if (count($buf) > 13)
                    array_shift($buf);
                if (count($buf) < 13)
                    continue;
                if ($buf[0] == ord(‘p’) &&
                    $buf[1] == ord(‘H’) &&
                    $buf[2] == ord(‘Y’) &&
                    $buf[3] == ord(‘s’))
                {
                    $x = ($buf[4] << 24) + ($buf[5] << 16) + ($buf[6] << 8) + $buf[7];
                    $y = ($buf[8] << 24) + ($buf[9] << 16) + ($buf[10] << 8) + $buf[11];
                    $units = $buf[12];
                    break;
                }
            }

            fclose($fh);

            if ($x != false
                && $units == 1
            ) {
                $x = round($x * 0.0254);
            }

            if ($y != false
                && $units == 1
            ) {
                $y = round($y * 0.0254);
            }

            if (empty($x)
                && empty($y)
            ) {
                if ($exifDpi = self::getImageDpiFromExif($filename)) {
                    $x = $exifDpi;
                    $y = $exifDpi;
                }
            }

            if (!empty($x)
                || !empty($y)
            ) {
                return array(
                    ‘x’ => $x,
                    ‘y’ => $y,
                );
            } else {
                return array(
                    ‘x’ => 72,
                    ‘y’ => 72,
                );
            }

        } else {
            Throw new \Exception(‘Invalid parameters’);
        }
    }

    /**
     * Read EXIF data.
     *
     * @static
     * @param string $filename
     * @throws \Exception
     * @return bool|float
     */
    public static function getImageDpiFromExif($filename)
    {

        if (!empty($filename)
            && file_exists($filename)
        ) {
            if (function_exists(‘exif_read_data’)) {
                if ($exifData = exif_read_data($filename)) {
                    if (isset($exifData[‘XResolution’])) {
                        if (strpos($exifData[‘XResolution’], ‘/’) !== false) {
                            if ($explode = explode(‘/’, $exifData[‘XResolution’])) {
                                return (float) ((int) $explode[0] / (int) $explode[1]);
                            }
                        } else {
                            return (int) $exifData[‘XResolution’];
                        }
                    } else if (isset($exifData[‘YResolution’])) {
                        if (strpos($exifData[‘YResolution’], ‘/’) !== false) {
                            if ($explode = explode(‘/’, $exifData[‘YResolution’])) {
                                return (float) ((int) $explode[0] / (int) $explode[1]);
                            }
                        } else {
                            return (int) $exifData[‘YResolution’];
                        }
                    }
                }
            } else {
                Throw new \Exception(‘Incompatible system.’);
            }
        } else {
            Throw new \Exception(‘Invalid parameters.’);
        }

        return false;

    }
}