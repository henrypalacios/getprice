<?php

namespace App;

use Goutte\Client;

class Petition
{
    private $client;
    private $selector = '//div[@class=\'productPrice box\']
        /h4[@class=\'price\']';

    public function __construct($url)
    {
        $this->setClient();
        $this->getPrice($url);
    }

    private function setClient()
    {
        $this->client = new Client();
    }

    private function getPrice($url)
    {
        $crawler = $this->client->request('GET', $url);

        $crawler->filterXPath($this->selector)->eq(0)->reduce(function ($node) {
            print Converter::converToNumber($node->text());
        });
    }

}