<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 2019-10-02
 * Time: 20:13
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function number() {
        $number = random_int(0, 1000);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}