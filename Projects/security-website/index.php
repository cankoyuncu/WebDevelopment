    <?php 

    define('security', true);

    include 'header.php'; 
    include 'main.php';

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];

        switch ($page) {
            case 'homepage':
                include 'main.php';
                break;
            case 'blog':
                include 'blog.php';
                break; 
            case 'about':
                include 'about.php';
                break;
            case 'service':
                include 'service.php';
                break;
            case 'guard':
                include 'guard.php';
                break;
            case 'contact':
                include 'contact.php';
                break;                             
            default:
                include 'main.php';
                break;
        }
    }

    include 'footer.php'; 
    
    ?>


