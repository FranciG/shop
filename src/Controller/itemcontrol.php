<?
namespace App\Controller;
//Bring in the response package, so a response is returned to the browser.
//Now I bring in different parts of the framework so I can use them
use Symfony\Component\HttpFoundation\Response;

class itemcontrol{
    
    public function index() {
        return new Response(
            '<html><body>Hola</body></html>');
        
    }
}