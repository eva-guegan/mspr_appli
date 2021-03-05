<?php


namespace App\Metier;


use App\Entity\Coupon;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Api
{
    private $client;

    /**
     * @param HttpClientInterface $client
     */
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $url
     *
     * @return ArrayCollection
     */
    public function listeCoupons(string $url): ArrayCollection
    {
        $response = $this->client->request(
            'GET', $url
        );

        $statusCode = $response->getStatusCode();
        $collection = new ArrayCollection();
        if ($statusCode === 200){
            $content = $response->getContent();
            $content = json_decode($content);

            $content = $content->_embedded->coupons;
            dump($content);
            foreach ($content as $json){
                $urlDetail = $json->_links->coupon;
                $id = $urlDetail->href;
                $id = explode('/', $id);
                $coupon = new Coupon($id[sizeof($id)-1], $json->titre, $json->reduc, $json->dateexpire);
                $collection->add($coupon);
            }
        }

        return $collection;
    }

}