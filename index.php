<?php
session_start();
$request = $_SERVER["REQUEST_URI"];

switch ($request)
{
    case("/monagram2"):
    case("/monagram2/"):
    case("/monagram2/index"):
        require __DIR__ . "/view/index.php";
        break;

        case("/monagram2/home"):
            require __DIR__ . "/view/home.php";
            break;

            case("/monagram2/register"):
                require __DIR__ . "/controller/register.php";
                break;

                case("/monagram2/di"):
                    require __DIR__ . "/controller/di.php";
                    break;
                    
                case("/monagram2/profilepage"):
                    require __DIR__ . "/view/profilepage.php";
                    break;
                        case("/monagram2/login"):
                            require __DIR__ . "/view/login.php";
                            break;
                            case("/monagram2/logout"):
                                require __DIR__ . "/view/logout.php";
                                break;
                                case("/monagram2/post"):
                                    require __DIR__ . "/controller/post.php";
                                    break;
                                    case("/monagram2/add_post"):
                                        require __DIR__ . "/controller/add_post_proccess.php";
                                        break;
                default:
                require __DIR__ . "/view/404.php";
                break;
                
}
?>