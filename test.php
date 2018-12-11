                <?php
                    $filename = 'img/cake/4.jpg';
                    $percent = 0.5;

                    header('Content-type: image/jpeg');

                    list($width, $height) = getimagesize($filename);
                    $new_width = $width * $percent;
                    $new_height = $height * $percent;

                    //Create layout for image
                    $thumb = imagecreatetruecolor($new_width, $new_height);
                    //Create new image from file
                    $new_image = imagecreatefromjpeg($filename);
                    //Copy and resize image
                    imagecopyresized($thumb, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

                    //Output image to browser or file

                    imagejpeg($thumb, 'img/cake/rescake/'.substr($filename, 9, 5), 90);

                    imagedestroy($thumb);