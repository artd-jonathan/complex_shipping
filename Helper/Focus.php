<?php
namespace Curso\ComplexShipping\Helper;
use \GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use \Curso\ComplexShipping\Helper\DANE;

class Focus extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    private string $_focusBaseUrl;
    /**
     * @var string
     */
    private string $_focusUser;
    /**
     * @var string
     */
    private string $_focusPassword;
    /**
     * @var string
     */
    private string $_token;
    /**
     * @var Client
     */
    private Client $_guzzleHttpClien;

    private string $_origin;
    /**
     * @param Client $guzzleHttpClien
     * @param string $focusUser
     * @param string $focusPassword
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Curso\ComplexShipping\Helper\DANE $DANE
        
    ) {
        $this->_focusBaseUrl = "https://focus.artd.com.co/api";
        $this->_guzzleHttpClient = new Client();
        $this->_DANE = $DANE;
        $this->_logger = $logger;
        $this->_origin= '11001000';
        $this->_destination = $this->_DANE->getDANECode();
        $this->_logger->info("Destination => ".$this->_destination);
    }

    public function generateToken(string $focusUser, string $focusPassword){
        $url = $this->_focusBaseUrl.'/token/';
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        $body = [
            "username"=> $focusUser,
            "password"=> $focusPassword
        ];
        try {
            $request = new Request('POST', $url, $headers, json_encode($body));
            $content = $this->_guzzleHttpClient->send($request);
            $response = json_decode($content->getBody(), true);
            $accessToken = $response["access"];
            $refreshToken = $response["refresh"];
            $this->_token = $accessToken;
            
        } catch (Exception $e) {
            $this->_logger->info(json_encode($e));
        }
    }
    public function calculateRate($pieces, $weight, $value, $increment_id){
        $url = $this->_focusBaseUrl.'/carries/servientrega/quote/';
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$this->_token
        ];
        $this->_logger->info(json_encode($this->_token));
        $body = [
            "pieces"=> 1,
            "weight"=> $weight,
            "length"=> 10,
            "width"=> 10,
            "height"=> 10,
            "value"=> $value*1000,
            "city_origin"=> $this->_origin,
            "city_destination"=> $this->_destination,
            "collect_money"=> false,
            "payment_method"=> 2,
            "delivery_time"=> 3,
            "transport"=> 1,
            "collection_number"=> $increment_id,
        ];
        $this->_logger->info(json_encode($body));
        $random_value = rand(15, 100);
        try {
            $request = new Request('POST', $url, $headers, json_encode($body));
            $content = $this->_guzzleHttpClient->send($request);
            $response = json_decode($content->getBody(), true);
            $quote = $response["data"]["quote"]["ValorTotal"];
            $this->_logger->info(json_encode($response));
            $this->_logger->info(json_encode($random_value));
            return $quote;
            
        } catch (Exception $e) {
            $this->_logger->info(json_encode($e));
            return $random_value;
        }
    }
}
