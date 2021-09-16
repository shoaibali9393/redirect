<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Redirectcontroller extends Controller
{

    public function index()
    {
        return view('redirects.index');
    }

    public function search(Request $request)
    {
        

        $pattern = '/[\n\s]/';
        $urls = preg_split($pattern, $request->url);

        if( $request->canonical == 1){
            foreach($urls as $key=>$value){
                $multiple_url[$key] = $this->checkRedirection($value);
               
            }
        }else{

            foreach($urls as $key=>$value){
                $multiple_url[$key] = $this->checkSingleRedirection($value);
                
            }
        }

        return response()
            ->json($multiple_url);

    }
     function getHeader($url)
    {
        //include_once('GetHeader.php');
        //$header = new GetHeader();
        $header_data = $this->curlHeader($url);
        $final_url = '';
        if (isset($header_data['Location'])) {
            $final_url = $header_data['Location'];
        } elseif (isset($header_data['location'])) {
            $final_url = $header_data['location'];
        }
        if ($final_url == $url) {
            // $final_url = '';
        }
        // echo $final_url;
        $data = ['redirect' => $final_url, 'header' => $header_data];
        // dd($data);
        return $data;
    }


    function curlHeader($url){
        $options = array(
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_AUTOREFERER => true,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => array('Accept: */*', 'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)', 'Connection: Keep-Alive')
        );
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $header = curl_exec($ch);

        $ret = curl_errno($ch);
        $error = curl_error($ch);

        //  echo '<pre>';
        //  var_dump(curl_getinfo($ch, CURLINFO_HEADER_OUT));
        // //  var_dump(curl_getinfo($ch, CURLINFO_CONTENT_TYPE));
        // //  var_dump(curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD));
        // //  var_dump(curl_getinfo($ch, CURLINFO_COOKIELIST ));
        // //  var_dump(curl_getinfo($ch, CURLINFO_HTTP_CONNECTCODE  ));
        //  var_dump(curl_getinfo($ch, CURLINFO_REQUEST_SIZE   ));
        //  var_dump(curl_getinfo($ch, CURLINFO_CONNECT_TIME    ));
        //  var_dump(curl_getinfo($ch, CURLINFO_TOTAL_TIME     ));
        //  var_dump(curl_getinfo($ch, CURLINFO_CONTENT_TYPE  ));
        //  var_dump(curl_getinfo($ch, CURLINFO_CERTINFO      ));
        //  echo '</pre>';

        curl_close($ch);
        return ($ret === 0) ? $this->parseHeader($header) : $error;
    }


    function parseHeader($header)
    {
            $head = array();
            $headarr =explode("\r\n", trim($header));
            $first = array_shift($headarr);
            preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#", $first, $code);
            $head['code'] = intval($code[1]);
            foreach($headarr as $v){
                $arr = explode(':', $v, 2);
                if (isset($arr[0]) && isset($arr[1])){
                    $head[trim($arr[0])] = trim($arr[1]);
                }
            }
            return $head;
        }



    function upper($content)
    {
        return ucwords($content, "-");
    }




    function ishttps($domain)
    {
        $match = 'https:';
        if (strpos($domain, $match) !== false) {
            return true;
        }
        return false;
    }


    function code($status_code)
    {

        $code = [
            100 => 'Continue',
            101 => 'Switching Protocols',
            102 => 'Processing', // WebDAV; RFC 2518
            103 => 'Early Hints', // RFC 8297
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information', // since HTTP/1.1
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content', // RFC 7233
            207 => 'Multi-Status', // WebDAV; RFC 4918
            208 => 'Already Reported', // WebDAV; RFC 5842
            226 => 'IM Used', // RFC 3229
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found', // Previously "Moved temporarily"
            303 => 'See Other', // since HTTP/1.1
            304 => 'Not Modified', // RFC 7232
            305 => 'Use Proxy', // since HTTP/1.1
            306 => 'Switch Proxy',
            307 => 'Temporary Redirect', // since HTTP/1.1
            308 => 'Permanent Redirect', // RFC 7538
            400 => 'Bad Request',
            401 => 'Unauthorized', // RFC 7235
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required', // RFC 7235
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed', // RFC 7232
            413 => 'Payload Too Large', // RFC 7231
            414 => 'URI Too Long', // RFC 7231
            415 => 'Unsupported Media Type', // RFC 7231
            416 => 'Range Not Satisfiable', // RFC 7233
            417 => 'Expectation Failed',
            418 => 'I\'m a teapot', // RFC 2324, RFC 7168
            421 => 'Misdirected Request', // RFC 7540
            422 => 'Unprocessable Entity', // WebDAV; RFC 4918
            423 => 'Locked', // WebDAV; RFC 4918
            424 => 'Failed Dependency', // WebDAV; RFC 4918
            425 => 'Too Early', // RFC 8470
            426 => 'Upgrade Required',
            428 => 'Precondition Required', // RFC 6585
            429 => 'Too Many Requests', // RFC 6585
            431 => 'Request Header Fields Too Large', // RFC 6585
            451 => 'Unavailable For Legal Reasons', // RFC 7725
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            506 => 'Variant Also Negotiates', // RFC 2295
            507 => 'Insufficient Storage', // WebDAV; RFC 4918
            508 => 'Loop Detected', // WebDAV; RFC 5842
            510 => 'Not Extended', // RFC 2774
            511 => 'Network Authentication Required', // RFC 6585
        ];

        return $code[$status_code];
    }




   private function checkRedirection($url)
    {

        if ($_POST) {

            if (isset($url) && $url != '' && filter_var($url, FILTER_VALIDATE_URL)) {
                // dd ($_POST);
                $url = $url;
                $domain = str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
                $www_nohttps = 'http://www.' . $domain;
                $www_https = 'https://www.' . $domain;
                $nowww_http = 'http://' . $domain;
                $nowww_https = 'https://' . $domain;
                $domain_list = [$www_nohttps, $www_https, $nowww_http, $nowww_https];
                $site_header = [];
                //  dd($domain_list);
                foreach ($domain_list as $domain_name) {
                    $Header = $this->getHeader($domain_name);
                    if (isset($Header['header']['code']) && $Header['header']['code'] != 200) {

                        $site_header[$domain_name][] = ['domain' => $domain_name, 'redirect' => $domain_name, 'code' => $Header['header']['code'], 'header' => $Header['header']];
                        $Header2 = $this->getHeader($Header['redirect']);
                        if (isset($Header2['header']['code']) && $Header2['header']['code'] != 200) {

                            $site_header[$domain_name][] = ['domain' => $Header['redirect'], 'redirect' => $Header2['redirect'], 'code' => $Header2['header']['code'], 'header' => $Header2['header']];
                            $Header3 = $this->getHeader($Header2['redirect']);
                            if (isset($Header3['header']['code']) && $Header3['header']['code'] != 200) {
                                $site_header[$domain_name][] = ['domain' => $Header2['redirect'], 'redirect' => $Header3['redirect'], 'code' => $Header3['header']['code'], 'header' => $Header3['header']];
                                $Header4 =  $this->getHeader($Header3['redirect']);
                                if (isset($Header4['header']['code']) && $Header4['header']['code'] != 200) {
                                    $site_header[$domain_name][] = ['domain' => $Header3['redirect'], 'redirect' => $Header4['redirect'], 'code' => $Header4['header']['code'], 'header' => $Header4['header']];
                                } else {
                                    $site_header[$domain_name][] = ['domain' =>$Header3['redirect'], 'code' => $Header4['header']['code'], 'header' => $Header4['header']];
                                }
                            } else {
                                $site_header[$domain_name][] = ['domain' => $Header2['redirect'], 'code' => $Header3['header']['code'], 'header' => $Header3['header']];
                            }
                        } else {
                            $site_header[$domain_name][] = ['domain' => $Header['redirect'], 'code' => $Header2['header']['code'], 'header' => $Header2['header']];
                        }
                    } else {
                        $site_header[$domain_name][] = ['domain' => $domain_name, 'code' => $Header['header']['code'], 'header' => $Header['header']];
                    }
                }

                $data['site_header'] = $site_header;
                foreach ($site_header as $domain_name => $site_header_array) {
                    // echo '<div style="background: #dedede; border: 1px solid #dfdfdf; padding: 10px; margin-bottom: 10px;word-break: break-all;">';
                     $data['site_header_array']=$site_header_array;
                    foreach ($site_header_array as $site_header_list) {
                        // echo '<div style="background: #efefef; border: 1px solid #888; padding: 10px; margin-bottom: 10px;word-break: break-all;">';
                        if (ishttps($site_header_list['domain']) == true) {
                            // echo '<div style="color:green">SSL Protected - ' . $site_header_list['domain'] . ' | Status Code: ' . $site_header_list['code'] . ' | Status Message: ' . code($site_header_list['code']) . '</div>';
                        } else {
                            // echo ' . $site_header_list['domain'] . ' | Status Code: ' . $site_header_list['code'] . ' | Status Message: ' . code($site_header_list['code']) . '</div>';
                        }
                         $data['site_header_list_header'] = $site_header_list['header'];
                        foreach ($site_header_list['header'] as $header_name => $header_value) {
                            // echo ". upper($header_name) . " " . $header_value . ";
                        }
                    }
                }

                return response()->json($data);
            }
        }
    }



   private function checkSingleRedirection($url)
    {
        if ($_POST) {

            if (isset($url) && $url != '' && filter_var($url, FILTER_VALIDATE_URL)) {
                // dd ($_POST);
                $url = $url;
                $domain_name = str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));

                // dd($domain_name);
                // $www_nohttps = 'http://www.' . $domain;
                // $www_https = 'https://www.' . $domain;
                // $nowww_http = 'http://' . $domain;
                // $nowww_https = 'https://' . $domain;
                // $domain_list = [$www_nohttps, $www_https, $nowww_http, $nowww_https];
                // $site_header = [];
                //  dd($domain_list);
                // foreach ($domain_list as $domain_name) {
                    $Header = $this->getHeader($domain_name);
                    if (isset($Header['header']['code']) && $Header['header']['code'] != 200) {

                        $site_header[$domain_name][] = ['domain' => $domain_name, 'redirect' => $domain_name, 'code' => $Header['header']['code'], 'header' => $Header['header']];
                        $Header2 = $this->getHeader($Header['redirect']);
                        if (isset($Header2['header']['code']) && $Header2['header']['code'] != 200) {

                            $site_header[$domain_name][] = ['domain' => $Header['redirect'], 'redirect' => $Header2['redirect'], 'code' => $Header2['header']['code'], 'header' => $Header2['header']];
                            $Header3 = $this->getHeader($Header2['redirect']);
                            if (isset($Header3['header']['code']) && $Header3['header']['code'] != 200) {
                                $site_header[$domain_name][] = ['domain' => $Header2['redirect'], 'redirect' => $Header3['redirect'], 'code' => $Header3['header']['code'], 'header' => $Header3['header']];
                                $Header4 =  $this->getHeader($Header3['redirect']);
                                if (isset($Header4['header']['code']) && $Header4['header']['code'] != 200) {
                                    $site_header[$domain_name][] = ['domain' => $Header3['redirect'], 'redirect' => $Header4['redirect'], 'code' => $Header4['header']['code'], 'header' => $Header4['header']];
                                } else {
                                    $site_header[$domain_name][] = ['domain' =>$Header3['redirect'], 'code' => $Header4['header']['code'], 'header' => $Header4['header']];
                                }
                            } else {
                                $site_header[$domain_name][] = ['domain' => $Header2['redirect'], 'code' => $Header3['header']['code'], 'header' => $Header3['header']];
                            }
                        } else {
                            $site_header[$domain_name][] = ['domain' => $Header['redirect'], 'code' => $Header2['header']['code'], 'header' => $Header2['header']];
                        }
                    } else {
                        $site_header[$domain_name][] = ['domain' => $domain_name, 'code' => $Header['header']['code'], 'header' => $Header['header']];
                    }
                // }

                $data['site_header'] = $site_header;
                // foreach ($site_header as $domain_name => $site_header_array) {

                //      $data['site_header_array']=$site_header_array;
                //     foreach ($site_header_array as $site_header_list) {

                //         if (ishttps($site_header_list['domain']) == true) {

                //         } else {

                //         }
                //          $data['site_header_list_header'] = $site_header_list['header'];
                //         foreach ($site_header_list['header'] as $header_name => $header_value) {

                //         }
                //     }
                // }
//dd($site_header);
                return response()->json($data);
            }
        }
    }







}
