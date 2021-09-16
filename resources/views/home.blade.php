@extends('layouts.default')





@section('content')

    <style>



        body {

            color: #4a4a4a;

            font-size: 1em;

            font-weight: 400;

            line-height: 1.5;

        }



        body, button, input, select, textarea {

            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, Helvetica, Arial, sans-serif;

        }



        @media only screen and (max-width: 550px) {

            .b-checkbox{

                float: right!important;

                margin-right: 23px;

                margin-top: 8px;

            }



        }



        @media only screen and (max-width: 342px) {

            .useragent{

                display: none;

            }



        }



    </style>

   <!-- ======= Hero Section ======= -->

    <section data-v-2c63f4b8="" class="hero is-small">

        <div class="hero-body m-t-md">

            <div class="container">

                <div class="columns is-multiline is-centered">

                    <div class="column text-center mt-4 mb-4 has-text-centered">

                        <img

                                src="{{asset('assets/icon/icon.svg')}}" alt="HTTP Status Code Checker" width="80px"

                                height="80px">

                    </div>

                    <div class="column text-center px-3 mb-5  is-full">

                        <h1

                                class="subtitle is-size-2-fullhd is-size-2-desktop is-size-2-tablet is-size-3-mobile has-text-centered has-text-dark">

                            Easily check <strong class="has-text-weight-bold">status codes</strong>, <strong

                                    class="has-text-weight-bold">response headers</strong>, and <strong

                                    class="has-text-weight-bold">redirect chains</strong>. </h1>

                    </div>

                    <div class="details mb-3">



                        <span class="float-end">



                            <div data-v-35454bda=""

                                                                         class="control is-hidden-mobile">            <span

                                        class="useragent"><small

                                            class="is-size-7 ">User Agent:&nbsp;</small></span>            <span

                                        class="select is-small" style="font-size: 12px;">              <select>                <option

                                                data-v-35454bda="" value="browser">Your Browser</option>                <optgroup

                                                data-v-35454bda="" label="Search Engine Bots">                  <option

                                                    data-v-35454bda=""

                                                    value="googlebot">Googlebot/2.1 (Desktop)</option><option

                                                    data-v-35454bda="" value="googlebot-smartphone">Googlebot/2.1 (Smartphone)</option><option

                                                    data-v-35454bda="" value="bingbot">Bingbot/2.0</option><option

                                                    data-v-35454bda="" value="yandexbot">YandexBot/3.0</option><option

                                                    data-v-35454bda="" value="applebot">Applebot/0.1</option></optgroup><optgroup

                                                data-v-35454bda="" label="Mobile Devices"><option data-v-35454bda=""

                                                                                                  value="iphone">iPhone/Safari iOS</option><option

                                                    data-v-35454bda="" value="ipad">iPad/Safari iOS</option><option

                                                    data-v-35454bda="" value="android-phone">Android Phone</option><option

                                                    data-v-35454bda=""

                                                    value="android-tablet">Android Tablet</option></optgroup><optgroup

                                                data-v-35454bda="" label="Desktop Devices"><option data-v-35454bda=""

                                                                                                   value="edge">Microsoft Edge</option><option

                                                    data-v-35454bda=""

                                                    value="ie11">Microsoft Internet Explorer 11</option><option

                                                    data-v-35454bda="" value="chrome">Google Chrome</option><option

                                                    data-v-35454bda="" value="firefox">Mozilla Firefox</option><option

                                                    data-v-35454bda="" value="safari">Apple Safari</option></optgroup><optgroup

                                                data-v-35454bda="" label="Other"><option data-v-35454bda=""

                                                                                         value="httpstatus">httpstatus/2.0</option><option

                                                    data-v-35454bda="" value="none">None</option></optgroup>                </select>              </span>                            <a

                                        href="" data-bs-toggle="modal" data-bs-target="#setting"

                                        data-bs-whatever="@mdo"><i style="font-size: 18px;"

                                                                   class="fa fa-cog ml-4"></i></a>            </div>          </span>

                        <label

                                class="b-checkbox  checkbox  is-hidden-mobile is-small"> <input type="checkbox"

                                                                                                true-value="true"

                                                                                                value="false">

                            <span class="check is-primary"></span> <span

                                    class="control-label">Canonical domain check</span> </label>



                    </div>

                    <textarea style="width:100%; height: 247px;" name="url"  placeholder="Enter URLs to check, one per line." autocomplete="off"

                              autocapitalize="off" autofocus="autofocus" spellcheck="false" rows="6"

                              class="textarea"></textarea> 

                    <div class="text-center mt-4">

                        <button type="button" id="status_btn" class="btn btn-primary btn-lg">Check Status</button>



                    </div>





                    <div class="modal fade" id="setting" tabindex="-1" aria-labelledby="exampleModalLabel"

                         aria-hidden="true">

                        <div class="modal-dialog modal-lg">

                            <div class="modal-content">

                                <div class="modal-header bg-light"><h5 class="modal-title" id="exampleModalLabel"><b>Setting</b>

                                    </h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"

                                            aria-label="Close"></button>

                                </div>

                                <div class="modal-body">

                                    <form>

                                        <div class="mb-3"><label for="recipient-name"

                                                                 class="col-form-label">Recipient:</label> <input

                                                    type="text" class="form-control" id="recipient-name"></div>

                                        <div class="mb-3"><label for="message-text"

                                                                 class="col-form-label">Message:</label> <textarea

                                                    class="form-control" id="message-text"></textarea></div>

                                    </form>

                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close

                                    </button>

                                    <button type="button" class="btn btn-primary">Send message</button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section><!-- End Hero -->



    <main id="main">
        <section data-v-637010d1="" data-v-2c63f4b8="" class="section results" id="results">
   <div data-v-637010d1="" class="container">
      
      <div data-v-637010d1="" class="columns is-multiline">
         <div data-v-637010d1="" class="column is-12 is-hidden-mobile">
            <div data-v-637010d1="" class="block filters is-pulled-right">
               <form data-v-637010d1="" action="export" method="post" class="source-button">
                  <input data-v-637010d1="" type="hidden" name="exportdata" value="[{&quot;requestedURL&quot;:&quot;http://www.laravel.com&quot;,&quot;numberOfRedirects&quot;:&quot;2&quot;,&quot;redirects&quot;:[{&quot;statusCode&quot;:301,&quot;redirectUri&quot;:&quot;https://www.laravel.com/&quot;},{&quot;statusCode&quot;:301,&quot;redirectUri&quot;:&quot;https://laravel.com/&quot;}],&quot;redirectChain&quot;:&quot;301 − 301&quot;,&quot;fullRedirectChain&quot;:[{&quot;statusCode&quot;:301,&quot;url&quot;:&quot;http://www.laravel.com&quot;,&quot;parsedUrl&quot;:{&quot;slashes&quot;:true,&quot;protocol&quot;:&quot;http:&quot;,&quot;hash&quot;:&quot;&quot;,&quot;query&quot;:{},&quot;pathname&quot;:&quot;&quot;,&quot;auth&quot;:&quot;&quot;,&quot;host&quot;:&quot;www.laravel.com&quot;,&quot;port&quot;:&quot;&quot;,&quot;hostname&quot;:&quot;www.laravel.com&quot;,&quot;password&quot;:&quot;&quot;,&quot;username&quot;:&quot;&quot;,&quot;origin&quot;:&quot;http://www.laravel.com&quot;,&quot;href&quot;:&quot;http://www.laravel.com&quot;}},{&quot;statusCode&quot;:301,&quot;url&quot;:&quot;https://www.laravel.com/&quot;,&quot;parsedUrl&quot;:{&quot;slashes&quot;:true,&quot;protocol&quot;:&quot;https:&quot;,&quot;hash&quot;:&quot;&quot;,&quot;query&quot;:{},&quot;pathname&quot;:&quot;/&quot;,&quot;auth&quot;:&quot;&quot;,&quot;host&quot;:&quot;www.laravel.com&quot;,&quot;port&quot;:&quot;&quot;,&quot;hostname&quot;:&quot;www.laravel.com&quot;,&quot;password&quot;:&quot;&quot;,&quot;username&quot;:&quot;&quot;,&quot;origin&quot;:&quot;https://www.laravel.com&quot;,&quot;href&quot;:&quot;https://www.laravel.com/&quot;}},{&quot;statusCode&quot;:200,&quot;url&quot;:&quot;https://laravel.com/&quot;,&quot;parsedUrl&quot;:{&quot;slashes&quot;:true,&quot;protocol&quot;:&quot;https:&quot;,&quot;hash&quot;:&quot;&quot;,&quot;query&quot;:{},&quot;pathname&quot;:&quot;/&quot;,&quot;auth&quot;:&quot;&quot;,&quot;host&quot;:&quot;laravel.com&quot;,&quot;port&quot;:&quot;&quot;,&quot;hostname&quot;:&quot;laravel.com&quot;,&quot;password&quot;:&quot;&quot;,&quot;username&quot;:&quot;&quot;,&quot;origin&quot;:&quot;https://laravel.com&quot;,&quot;href&quot;:&quot;https://laravel.com/&quot;}}],&quot;redirectURLChain&quot;:[&quot;http://www.laravel.com&quot;,&quot;https://www.laravel.com/&quot;,&quot;https://laravel.com/&quot;],&quot;statusCode&quot;:200,&quot;statusMessage&quot;:&quot;OK&quot;,&quot;requestId&quot;:&quot;133f256d-1366-4d4b-ae43-d041d13bc02c&quot;}]"><input data-v-637010d1="" type="hidden" name="format" value="csv">
                  <div data-v-637010d1="" class="field has-addons">
                     <!----> <a data-v-637010d1="" disabled="disabled" class="button is-grey-blue"><span data-v-637010d1="" class="icon"><i class="mdi mdi-close mdi-24px"></i></span><span data-v-637010d1="">Clear filters</span></a>
                     &nbsp;&nbsp;
                     <span data-v-637010d1="" data-tooltip="Add your Google SpreadSheet URL to the settings" class="tooltip is-tooltip-top"><button data-v-637010d1="" disabled="disabled" class="button is-grey-blue is-button"><span data-v-637010d1="" class="icon"><i class="mdi mdi-google-spreadsheet mdi-24px"></i></span><span data-v-637010d1="">Export to Sheets</span></button></span>
                     &nbsp;&nbsp;
                     <a data-v-637010d1="" class="button is-grey-blue"><span data-v-637010d1="" class="icon"><i class="mdi mdi-download mdi-24px"></i></span><span data-v-637010d1="">Download
                     <span data-v-637010d1="" class="is-uppercase">csv</span></span></a> <!---->
                  </div>
               </form>
            </div>
         </div>
         <div data-v-637010d1="" class="filters column is-12 is-hidden-mobile">
            <div data-v-637010d1="" class="field is-expanded is-grouped">
               <!----> 
               <div data-v-637010d1="" class="control has-icons-left">
                  <span class="select">
                     <select>
                        <!----> 
                        <optgroup data-v-637010d1="" label="Show # of results">
                           <option data-v-637010d1="" value="10">10 URLs</option>
                           <option data-v-637010d1="" value="25">25 URLs</option>
                           <option data-v-637010d1="" value="50">50 URLs</option>
                           <option data-v-637010d1="" value="100">100 URLs</option>
                        </optgroup>
                     </select>
                  </span>
                  <span class="icon is-left"><i class="mdi mdi-pound-box mdi-24px"></i></span>
               </div>
               <div data-v-637010d1="" class="control has-icons-left">
                  <span class="select">
                     <select>
                        <!----> 
                        <optgroup data-v-637010d1="" label="Select redirect type">
                           <option data-v-637010d1="" value="all">All redirects</option>
                           <option data-v-637010d1="" value="301">
                              301 redirect
                           </option>
                           <option data-v-637010d1="" value="none">
                              No redirects
                           </option>
                        </optgroup>
                     </select>
                  </span>
                  <span class="icon is-left"><i class="mdi mdi-filter-variant mdi-24px"></i></span>
               </div>
               <div data-v-637010d1="" class="control has-icons-left">
                  <span class="select">
                     <select disabled="disabled">
                        <!----> 
                        <optgroup data-v-637010d1="" label="Select status code">
                           <option data-v-637010d1="" value="all">All status codes</option>
                           <option data-v-637010d1="" value="200">
                              200
                           </option>
                        </optgroup>
                     </select>
                  </span>
                  <span class="icon is-left"><i class="mdi mdi-filter-variant mdi-24px"></i></span>
               </div>
               <div data-v-637010d1="" class="control has-icons-left is-expanded is-clearfix">
                  <input type="search" autocomplete="on" placeholder="Search URLs... " disabled="disabled" class="input"> <span class="icon is-left"><i class="mdi mdi-magnify mdi-24px"></i></span> <!----> <!---->
               </div>
               <!---->
            </div>
         </div>
         <div data-v-637010d1="" class="column is-12">
            <div data-v-637010d1="" class="b-table">
               <!----> <!----> 
               <div class="table-wrapper">
                  <table class="table is-striped is-hoverable">
                     <thead>
                        <tr>
                           <th width="40px"></th>
                           <!----> 
                           <th class="is-sortable">
                              <div class="th-wrap">Request URL <span class="icon is-small is-desc" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div>
                           </th>
                           <th class="" style="width: 250px;">
                              <div class="th-wrap">Status codes <span class="icon is-small is-desc" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div>
                           </th>
                           <th class="is-current-sort is-sortable" style="width: 150px;">
                              <div class="th-wrap is-numeric">Redirects <span class="icon is-small is-desc"><i class="mdi mdi-arrow-up"></i></span></div>
                           </th>
                           <!---->
                        </tr>
                        <!---->
                     </thead>
                     <tbody>
                        <tr draggable="false" class="">
                           <td class="chevron-cell"><a role="button"><span class="icon"><i class="mdi mdi-chevron-right mdi-24px"></i></span></a></td>
                           <!----> 
                           <td data-v-637010d1="" data-label="Request URL" class="" style="min-width: 200px;"><a data-v-637010d1="" href="http://www.laravel.com" target="_blank" rel="noopener" class="is-url">http://www.laravel.com</a></td>
                           <td data-v-637010d1="" data-label="Status codes" class="">
                              <div data-v-637010d1="" class="tags">
                                 <span data-v-637010d1="" data-tooltip="301 redirect to https://www.laravel.com/" class="tag is-info tooltip is-tooltip-top">301</span><span data-v-637010d1="" data-tooltip="301 redirect to https://laravel.com/" class="tag is-info tooltip is-tooltip-top">301</span><span data-v-637010d1="" data-tooltip="OK" class="tag is-success tooltip is-tooltip-right">200</span><!----><!----><!----><!---->
                              </div>
                           </td>
                           <td data-v-637010d1="" data-label="Redirects" class="has-text-right">
                              2
                           </td>
                           <!---->
                        </tr>
                        <!----> <!---->
                     </tbody>
                     <!---->
                  </table>
               </div>
               <div class="level">
                  <div class="level-left">
                     <p data-v-637010d1="">
                        1
                        URL
                     </p>
                  </div>
                  <div class="level-right">
                     <div class="level-item">
                        <nav class="pagination">
                           <a role="button" href="#" disabled="disabled" class="pagination-link pagination-previous"><span class="icon" aria-hidden="true"><i class="mdi mdi-chevron-left mdi-24px"></i></span></a> <a role="button" href="#" disabled="disabled" class="pagination-link pagination-next"><span class="icon" aria-hidden="true"><i class="mdi mdi-chevron-right mdi-24px"></i></span></a> 
                           <ul class="pagination-list">
                              <!----> <!----> 
                              <li><a role="button" href="#" aria-current="true" class="pagination-link is-current ">1</a></li>
                              <!----> <!---->
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

        <!-- ======= Services Section ======= -->

        <section id="services" class="services section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-title"><h2>Sevices</h2>

                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit

                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias

                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p></div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

                        <div class="icon-box iconbox-blue">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>

                                </svg>

                                <i class="bx bxl-dribbble"></i></div>

                            <h4><a>Lorem Ipsum</a></h4>

                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p></div>

                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"

                         data-aos-delay="200">

                        <div class="icon-box iconbox-orange ">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>

                                </svg>

                                <i class="bx bx-file"></i></div>

                            <h4><a >Sed Perspiciatis</a></h4>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p></div>

                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"

                         data-aos-delay="300">

                        <div class="icon-box iconbox-pink">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>

                                </svg>

                                <i class="bx bx-tachometer"></i></div>

                            <h4><a >Magni Dolores</a></h4>

                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p></div>

                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"

                         data-aos-delay="100">

                        <div class="icon-box iconbox-yellow">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>

                                </svg>

                                <i class="bx bx-layer"></i></div>

                            <h4><a >Nemo Enim</a></h4>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p></div>

                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"

                         data-aos-delay="200">

                        <div class="icon-box iconbox-red">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>

                                </svg>

                                <i class="bx bx-slideshow"></i></div>

                            <h4><a >Dele Cardo</a></h4>

                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p></div>

                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"

                         data-aos-delay="300">

                        <div class="icon-box iconbox-teal">

                            <div class="icon">

                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"

                                          d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>

                                </svg>

                                <i class="bx bx-arch"></i></div>

                            <h4><a >Divera Don</a></h4>

                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p></div>

                    </div>

                </div>

            </div>

        </section><!-- End Sevices Section -->

        <!-- ======= Testimonials Section ======= -->

        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <div class="section-title"><h2>Testimonials</h2>

                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit

                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias

                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p></div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i> Proin

                                    iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.

                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at

                                    semper. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p><img

                                        src="{{asset("assets/img/testimonials/testimonials-1.jpg")}}" class="testimonial-img" alt="">

                                <h3>Saul Goodman</h3>              <h4>Ceo &amp; Founder</h4></div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">

                            <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>

                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid

                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet

                                    legam anim culpa. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p><img

                                        src="{{asset("assets/img/testimonials/testimonials-2.jpg")}}" class="testimonial-img" alt="">

                                <h3>Sara Wilsson</h3>              <h4>Designer</h4></div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">

                            <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim

                                    nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam

                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.

                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>              <img

                                        src="{{asset("assets/img/testimonials/testimonials-3.jpg")}}" class="testimonial-img" alt="">

                                <h3>Jena Karlis</h3>              <h4>Store Owner</h4></div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">

                            <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>

                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim

                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem

                                    dolore labore illum veniam. <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                                </p><img src="{{asset("assets/img/testimonials/testimonials-4.jpg")}}" class="testimonial-img"

                                         alt="">

                                <h3>Matt Brandon</h3>              <h4>Freelancer</h4></div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">

                            <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis

                                    quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster

                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam

                                    culpa fore nisi cillum quid. <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                                </p><img src="{{asset("assets/img/testimonials/testimonials-5.jpg")}}" class="testimonial-img"

                                         alt="">

                                <h3>John Larson</h3>              <h4>Entrepreneur</h4></div>

                        </div><!-- End testimonial item -->        </div>

                    <div class="swiper-pagination"></div>

                </div>

            </div>

        </section><!-- End Testimonials Section -->



        <!-- start help -->

        <section id="help" class="help">

            <div id="app">

                <div class="content-section">



                    <div data-v-37eaa058="" >

                        <section data-v-37eaa058="" style="background: #09f;" class="hero is-primary"><div data-v-37eaa058="" class="hero-body"><div data-v-37eaa058="" class="container"><div data-v-37eaa058="" class="columns"><div data-v-37eaa058="" class="column is-8"><h1 style="color: white;" data-v-37eaa058="" class="title is-size-2-desktop is-size-3-touch has-text-weight-semibold">

                                                Help

                                            </h1><p style="color: white;" data-v-37eaa058="" class="subtitle is-size-4-desktop is-size-5-touch has-text-weight-normal has-text-primary-light">

                                                A list of the most frequently asked questions, maybe it can

                                                help.

                                            </p></div></div></div></div></section>

                        <section data-v-37eaa058="" class="section p-t-lg" style="margin-top: -2.75rem!important;">



                            <div data-v-37eaa058="" class="container">

                                <div data-v-37eaa058="" class="columns is-multiline">

                                    <div data-v-37eaa058="" class="column is-12 content mb-4" style="    margin-bottom: 4.5rem!important;">

                                        <h2 data-v-37eaa058="" class="has-text-weight-semibold">About</h2>



                                        <hr data-v-37eaa058="">

                                        <p data-v-37eaa058="">

                                            Since 2011 httpstatus.io is a popular bulk HTTP status checker,

                                            redirect checker and header checker. You can use this tool to

                                            easily check HTTP status codes, status messages, response headers,

                                            and redirect chains returned by a server in response to a URL

                                            request by clients like a browser or search engine bot.

                                        </p>

                                        <p data-v-37eaa058=""></p>

                                        <p data-v-37eaa058="">

                                            It has become a trusted tool for thousands of developers, search

                                            specialists, site owners and marketing professionals across the

                                            world.

                                        </p></div>

                                    <div data-v-37eaa058="" class="column is-12">



                                        <dreiv data-v-37eaa058="" class="content">

                                            <h2 data-v-37eaa058="" class="has-text-weight-semibold">Settings</h2>

                                            <hr data-v-37eaa058="">

                                        </dreiv>



                                        {{--//question session start --}}

                                        <section id="faq" class="faq section" style=" margin-top: -40px;">

                                            <div class="container aos-init aos-animate" data-aos="fade-up">



                                                <div class="faq-list">

                                                    <ul>

                                                        <li data-aos="fade-up" class="aos-init aos-animate">

                                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target="#faq-list-1" aria-expanded="false">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                                                            <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list" style="">

                                                                <p>

                                                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.

                                                                </p>

                                                            </div>

                                                        </li>



                                                        <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">

                                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed" aria-expanded="false">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                                                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list" style="">

                                                                <p>

                                                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.

                                                                </p>

                                                            </div>

                                                        </li>



                                                        <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">

                                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                                                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">

                                                                <p>

                                                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis

                                                                </p>

                                                            </div>

                                                        </li>



                                                        <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">

                                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                                                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">

                                                                <p>

                                                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.

                                                                </p>

                                                            </div>

                                                        </li>



                                                        <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">

                                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                                                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">

                                                                <p>

                                                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.

                                                                </p>

                                                            </div>

                                                        </li>



                                                    </ul>

                                                </div>



                                            </div>

                                        </section>



                                    </div>



                                    {{--                        end Question session--}}







                                </div>

                                <br data-v-37eaa058="">

                                <div data-v-37eaa058="" class="message alert alert-dark">

                                    <div data-v-37eaa058="" class="message-body">

                                        <div data-v-37eaa058="" class="level">

                                            <div data-v-37eaa058="" class="level-left">

                                                <div data-v-37eaa058="" class="level-item">

                                                    <div class="row">

                                                        <div class="col-6">

                                                            <p data-v-37eaa058="">Can't find the

                                                                answer to your question?</p>

                                                        </div>

                                                        <div class="col-6">

                                                            <a class="btn btn-secondary btn-lg float-end" href="#" role="button">Ask Question</a>



                                                        </div>

                                                    </div>



                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section><!----></div>

                </div>

            </div>

        </section>



        <!-- end help -->



        <!--start status-code -->

        <style>



            #atg:hover{

                text-decoration: underline!important;

            }

            #atg{

                color: #08c!important;

                cursor: pointer!important;

                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif!important;

                /*font-size: 13px!important;*/

                /*line-height: 18px!important;*/

            }

            .row h2 {

                font-size: 24px!important;

                line-height: 36px!important;

                font-family: inherit!important;

                font-weight: bold!important;



                text-rendering: optimizelegibility!important;

            }

        </style>

        <div  class="container">



            <div class="row">

                <div class="span12">

                    <h1>HTTP Status Codes</h1>

                    <p>This page is created from HTTP status code information found at <a id="atg" href="https://www.ietf.org/assignments/http-status-codes/http-status-codes.xml" target="_blank">ietf.org</a> and <a id="atg" href="https://en.wikipedia.org/wiki/HTTP_status_code" target="_blank">Wikipedia</a>. Click on the <strong>category heading</strong> or the <strong>status code</strong> link to read more.</p>

                </div>

            </div>

            <div class="row">

                <div class="span12">

                    <h2><a id="atg"  data-bs-toggle="collapse" data-bs-target="#xx1">1xx Informational</a></h2>

                    <div id="xx1" class="collapse">

                        <p>This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. There are no required headers for this class of status code. Since HTTP/1.0 did not define any 1xx status codes, servers MUST NOT send a 1xx response to an HTTP/1.0 client except under experimental conditions.</p>

                        <p>A client MUST be prepared to accept one or more 1xx status responses prior to a regular response, even if the client does not expect a 100 (Continue) status message. Unexpected 1xx status responses MAY be ignored by a user agent.</p>

                        <p>Proxies MUST forward 1xx responses, unless the connection between the proxy and its client has been closed, or unless the proxy itself requested the generation of the 1xx response. (For example, if a proxy adds a "Expect: 100-continue" field when it forwards a request, then it need not forward the corresponding 100 (Continue) response(s).)</p>

                        <h3>Wikipedia</h3>

                        <p>Request received, continuing process.</p>

                        <p>This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions.</p>

                    </div>

                </div>

            </div>



            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#continue">100 Continue</a>

                    <div id="continue" class="collapse">

                        <p>The client SHOULD continue with its request. This interim response is used to inform the client that the initial part of the request has been received and has not yet been rejected by the server. The client SHOULD continue by sending the remainder of the request or, if the request has already been completed, ignore this response. The server MUST send a final response after the request has been completed. See section 8.2.3 for detailed discussion of the use and handling of this status code.</p>

                        <h3>Wikipedia</h3>

                        <p>This means that the server has received the request headers, and that the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). If the request body is large, sending it to a server when a request has already been rejected based upon inappropriate headers is inefficient. To have a server check if the request could be accepted based on the request's headers alone, a client must send Expect: 100-continue as a header in its initial request and check if a 100 Continue status code is received in response before continuing (or receive 417 Expectation Failed and not continue).</p>

                    </div>

                </div>

                <div class="span4">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#switching_protocols" href="#">101 Switching Protocols</a>

                    <div id="switching_protocols" class="collapse">

                        <p>The server understands and is willing to comply with the client's request, via the Upgrade message header field (section 14.42), for a change in the application protocol being used on this connection. The server will switch protocols to those defined by the response's Upgrade header field immediately after the empty line which terminates the 101 response.</p>

                        <p>The protocol SHOULD be switched only when it is advantageous to do so. For example, switching to a newer version of HTTP is advantageous over older versions, and switching to a real-time, synchronous protocol might be advantageous when delivering resources that use such features.</p>

                        <h3>Wikipedia</h3>

                        <p>This means the requester has asked the server to switch protocols and the server is acknowledging that it will do so.</p>

                    </div>

                </div>

                <div class="span4">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#processing" href="#">102 Processing (WebDAV)</a>

                    <div id="processing" class="collapse">

                        <p>The 102 (Processing) status code is an interim response used to inform the client that the server has accepted the complete request, but has not yet completed it.  This status code SHOULD only be sent when the server has a reasonable expectation that the request will take significant time to complete. As guidance, if a method is taking longer than 20 seconds (a reasonable, but arbitrary value) to process the server SHOULD return a 102 (Processing) response. The server MUST send a final response after the request has been completed.</p>

                        <p>Methods can potentially take a long period of time to process, especially methods that support the Depth header.  In such cases the client may time-out the connection while waiting for a response.  To prevent this the server may return a 102 (Processing) status code to indicate to the client that the server is still processing the method.</p>

                        <h3>Wikipedia</h3>

                        <p>As a WebDAV request may contain many sub-requests involving file operations, it may take a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.</p>

                    </div>

                </div>

            </div>

            <div class="row ">

                <div class="span12">

                    <h2><a id="atg" data-bs-toggle="collapse" data-bs-target="#xx2">2xx Success</a></h2>

                    <div id="xx2" class="collapse">

                        <p>This class of status code indicates that the client's request was successfully received, understood, and accepted.</p>

                        <h3>Wikipedia</h3>

                        <p>This class of status codes indicates the action requested by the client was received, understood, accepted and processed successfully.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 " >

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#ok">200 OK</a>

                    <div id="ok" class="collapse">

                        <p>The request has succeeded. The information returned with the response is dependent on the method used in the request, for example:

                        </p><ul>

                            <li>GET an entity corresponding to the requested resource is sent in the response;</li>

                            <li>HEAD the entity-header fields corresponding to the requested resource are sent in the response without any message-body;</li>

                            <li>POST an entity describing or containing the result of the action;</li>

                            <li>TRACE an entity containing the request message as received by the end server.</li>

                        </ul>

                        <p></p>

                        <h3>Wikipedia</h3>

                        <p>Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request the response will contain an entity describing or containing the result of the action.</p>

                        <p><i class="icon-star"></i> General status code. Most common code used to indicate success.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#created">201 Created</a>

                    <div id="created" class="collapse">

                        <p>The request has been fulfilled and resulted in a new resource being created. The newly created resource can be referenced by the URI(s) returned in the entity of the response, with the most specific URI for the resource given by a Location header field. The response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. The origin server MUST create the resource before returning the 201 status code. If the action cannot be carried out immediately, the server SHOULD respond with 202 (Accepted) response instead.</p>

                        <p>A 201 response MAY contain an ETag response header field indicating the current value of the entity tag for the requested variant just created, see section 14.19.</p>

                        <h3>Wikipedia</h3>

                        <p>The request has been fulfilled and resulted in a new resource being created.</p>

                        <p><i class="icon-star"></i> Successful creation occurred (via either POST or PUT). Set the Location header to contain a link to the newly-created resource (on POST). Response body content may or may not be present.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#accepted">202 Accepted</a>

                    <div id="accepted" class="collapse">

                        <p>The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place. There is no facility for re-sending a status code from an asynchronous operation such as this.</p>

                        <p>The 202 response is intentionally non-committal. Its purpose is to allow a server to accept a request for some other process (perhaps a batch-oriented process that is only run once per day) without requiring that the user agent's connection to the server persist until the process is completed. The entity returned with this response SHOULD include an indication of the request's current status and either a pointer to a status monitor or some estimate of when the user can expect the request to be fulfilled.</p>

                        <h3>Wikipedia</h3>

                        <p>The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#nainfo">203 Non-Authoritative Information</a>

                    <div id="nainfo" class="collapse">

                        <p>The returned metainformation in the entity-header is not the definitive set as available from the origin server, but is gathered from a local or a third-party copy. The set presented MAY be a subset or superset of the original version. For example, including local annotation information about the resource might result in a superset of the metainformation known by the origin server. Use of this response code is not required and is only appropriate when the response would otherwise be 200 (OK).</p>

                        <h3>Wikipedia</h3>

                        <p>The server successfully processed the request, but is returning information that may be from another source.</p>

                        <p>Not present in HTTP/1.0: available since HTTP/1.1</p>

                    </div>

                </div>

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#nocontent">204 No Content</a>

                    <div id="nocontent" class="collapse">

                        <p>The server has fulfilled the request but does not need to return an entity-body, and might want to return updated metainformation. The response MAY include new or updated metainformation in the form of entity-headers, which if present SHOULD be associated with the requested variant.</p>

                        <p>If the client is a user agent, it SHOULD NOT change its document view from that which caused the request to be sent. This response is primarily intended to allow input for actions to take place without causing a change to the user agent's active document view, although any new or updated metainformation SHOULD be applied to the document currently in the user agent's active view.</p>

                        <p>The 204 response MUST NOT include a message-body, and thus is always terminated by the first empty line after the header fields.</p>

                        <h3>Wikipedia</h3>

                        <p>The server successfully processed the request, but is not returning any content.</p>

                        <p><i class="icon-star"></i> Status when wrapped responses (e.g. JSEND) are not used and nothing is in the body (e.g. DELETE).</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#resetcontent">205 Reset Content</a>

                    <div id="resetcontent" class="collapse">

                        <p>The server has fulfilled the request and the user agent SHOULD reset the document view which caused the request to be sent. This response is primarily intended to allow input for actions to take place via user input, followed by a clearing of the form in which the input is given so that the user can easily initiate another input action. The response MUST NOT include an entity.</p>

                        <h3>Wikipedia</h3>

                        <p>The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#partialcontent">206 Partial Content</a>

                    <div id="partialcontent" class="collapse">

                        <p>The server has fulfilled the partial GET request for the resource. The request MUST have included a Range header field (section 14.35) indicating the desired range, and MAY have included an If-Range header field (section 14.27) to make the request conditional.</p>

                        <p>The response MUST include the following header fields:</p>

                        <ul>

                            <li>Either a Content-Range header field (section 14.16) indicating the range included with this response, or a multipart/byteranges Content-Type including Content-Range fields for each part. If a Content-Length header field is present in the response, its value MUST match the actual number of OCTETs transmitted in the message-body.</li>

                            <li>Date</li>

                            <li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>

                            <li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>

                        </ul>

                        <p>If the 206 response is the result of an If-Range request that used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. If the response is the result of an If-Range request that used a weak validator, the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers. Otherwise, the response MUST include all of the entity-headers that would have been returned with a 200 (OK) response to the same request.</p>

                        <p>A cache MUST NOT combine a 206 response with other previously cached content if the ETag or Last-Modified headers do not match exactly, see 13.5.4.</p>

                        <p>A cache that does not support the Range and Content-Range headers MUST NOT cache 206 (Partial) responses.</p>

                        <h3>Wikipedia</h3>

                        <p>The server is delivering only part of the resource due to a range header sent by the client. The range header is used by tools like wget to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#multi_status">207 Multi-Status (WebDAV)</a>

                    <div id="multi_status" class="collapse">

                        <p>The 207 (Multi-Status) status code provides status for multiple independent operations (see section 11 for more information).</p>

                        <h3>Wikipedia</h3>

                        <p>The message body that follows is an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#already_reported">208 Already Reported (WebDAV)</a>

                    <div id="already_reported" class="collapse">

                        <p>The 208 (Already Reported) status code can be used inside a DAV: propstat response element to avoid enumerating the internal members of multiple bindings to the same collection repeatedly.  For each binding to a collection inside the request's scope, only one will be reported with a 200 status, while subsequent DAV:response elements for all other bindings will use the 208 status, and no DAV:response elements for their descendants are included.</p>

                        <h3>Wikipedia</h3>

                        <p>The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#im_used">226 IM Used</a>

                    <div id="im_used" class="collapse">

                        <p>The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.  The actual current instance might not be available except by combining this response with other previous or future responses, as appropriate for the specific instance-manipulation(s).  If so, the headers of the resulting instance are the result of combining the headers from the status-226 response and the other instances, following the rules in section 13.5.3 of the HTTP/1.1 specification.</p>

                        <p>The request MUST have included an A-IM header field listing at least one instance-manipulation.  The response MUST include an Etag header field giving the entity tag of the current instance.</p>

                        <p>A response received with a status code of 226 MAY be stored by a cache and used in reply to a subsequent request, subject to the HTTP expiration mechanism and any Cache-Control headers, and to the requirements in section 10.6.</p>

                        <p>A response received with a status code of 226 MAY be used by a cache, in conjunction with a cache entry for the base instance, to create a cache entry for the current instance.</p>

                        <h3>Wikipedia</h3>

                        <p>The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.</p>

                    </div>

                </div>

                <div class="span8 ">

                    &nbsp;

                </div>

            </div>

            <div class="row">

                <div class="span12">

                    <h2><a id="atg" data-bs-toggle="collapse" data-bs-target="#xx3">3xx Redirection</a></h2>

                    <div id="xx3" class="collapse">

                        <p>This class of status code indicates that further action needs to be taken by the user agent in order to fulfill the request. The action required MAY be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A client SHOULD detect infinite redirection loops, since such loops generate network traffic for each redirection.</p>

                        <blockquote><strong>Note:</strong> previous versions of this specification recommended a maximum of five redirections. Content developers should be aware that there might be clients that implement such a fixed limitation.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>The client must take additional action to complete the request.</p>

                        <p>This class of status code indicates that further action needs to be taken by the user agent in order to fulfil the request. The action required may be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A user agent should not automatically redirect a request more than five times, since such redirections usually indicate an infinite loop.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#multiplechoices">300 Multiple Choices</a>

                    <div id="multiplechoices" class="collapse">

                        <p>The requested resource corresponds to any one of a set of representations, each with its own specific location, and agent- driven negotiation information (section 12) is being provided so that the user (or user agent) can select a preferred representation and redirect its request to that location.</p>

                        <p>Unless it was a HEAD request, the response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content- Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.</p>

                        <p>If the server has a preferred choice of representation, it SHOULD include the specific URI for that representation in the Location field; user agents MAY use the Location field value for automatic redirection. This response is cacheable unless indicated otherwise.</p>

                        <h3>Wikipedia</h3>

                        <p>Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#movepermanently">301 Moved Permanently</a>

                    <div id="movepermanently" class="collapse">

                        <p>The requested resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs. Clients with link editing capabilities ought to automatically re-link references to the Request-URI to one or more of the new references returned by the server, where possible. This response is cacheable unless indicated otherwise.</p>

                        <p>The new permanent URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).</p>

                        <p>If the 301 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.</p>

                        <blockquote><strong>Note:</strong> When automatically redirecting a POST request after receiving a 301 status code, some existing HTTP/1.0 user agents will erroneously change it into a GET request.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>This and all future requests should be directed to the given URI.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#found">302 Found</a>

                    <div id="found" class="collapse">

                        <p>The requested resource resides temporarily under a different URI. Since the redirection might be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.</p>

                        <p>The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).</p>

                        <p>If the 302 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.</p>

                        <blockquote><strong>Note:</strong> RFC 1945 and RFC 2068 specify that the client is not allowed to change the method on the redirected request.  However, most existing user agent implementations treat 302 as if it were a 303 response, performing a GET on the Location field-value regardless of the original request method. The status codes 303 and 307 have been added for servers that wish to make unambiguously clear which kind of reaction is expected of the client.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>This is an example of industry practice contradicting the standard.[2] The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#see_other">303 See Other</a>

                    <div id="see_other" class="collapse">

                        <p>The response to the request can be found under a different URI and SHOULD be retrieved using a GET method on that resource. This method exists primarily to allow the output of a POST-activated script to redirect the user agent to a selected resource. The new URI is not a substitute reference for the originally requested resource. The 303 response MUST NOT be cached, but the response to the second (redirected) request might be cacheable.</p>

                        <p>The different URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).</p>

                        <blockquote>Note: Many pre-HTTP/1.1 user agents do not understand the 303 status. When interoperability with such clients is a concern, the 302 status code may be used instead, since most user agents react to a 302 response as described here for 303.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message.</p>

                        <p>Since HTTP/1.1</p>

                    </div>

                </div>

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#not_modified">304 Not Modified</a>

                    <div id="not_modified" class="collapse">

                        <p>If the client has performed a conditional GET request and access is allowed, but the document has not been modified, the server SHOULD respond with this status code. The 304 response MUST NOT contain a message-body, and thus is always terminated by the first empty line after the header fields.</p>

                        <p>The response MUST include the following header fields:</p>

                        <ul>

                            <li>Date, unless its omission is required by section 14.18.1</li>

                        </ul>

                        <p>If a clockless origin server obeys these rules, and proxies and clients add their own Date to any response received without one (as already specified by [RFC 2068], section 14.19), caches will operate correctly.</p>

                        <ul>

                            <li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>

                            <li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>

                        </ul>

                        <p>If the conditional GET used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. Otherwise (i.e., the conditional GET used a weak validator), the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers.</p>

                        <p>If a 304 response indicates an entity not currently cached, then the cache MUST disregard the response and repeat the request without the conditional.</p>

                        <p>If a cache uses a received 304 response to update a cache entry, the cache MUST update the entry to reflect any new field values given in the response.</p>

                        <h3>Wikipedia</h3>

                        <p>Indicates the resource has not been modified since last requested. Typically, the HTTP client provides a header like the If-Modified-Since header to provide a time against which to compare. Using this saves bandwidth and reprocessing on both the server and client, as only the header data must be sent and received in comparison to the entirety of the page being re-processed by the server, then sent again using more bandwidth of the server and client.</p>

                        <p><i class="icon-star"></i> Used for conditional GET calls to reduce band-width usage. If used, must set the Date, Content-Location, ETag headers to what they would have been on a regular GET call.  There must be no body on the response.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#use_proxy">305 Use Proxy</a>

                    <div id="use_proxy" class="collapse">

                        <p>The requested resource MUST be accessed through the proxy given by the Location field. The Location field gives the URI of the proxy. The recipient is expected to repeat this single request via the proxy. 305 responses MUST only be generated by origin servers.</p>

                        <blockquote>Note: RFC 2068 was not clear that 305 was intended to redirect a single request, and to be generated by origin servers only.  Not observing these limitations has significant security consequences.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 col">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#unused306">306 (Unused)</a>

                    <div id="unused306" class="collapse">

                        <p>The 306 status code was used in a previous version of the specification, is no longer used, and the code is reserved.</p>

                        <h3>Wikipedia</h3>

                        <p>No longer used. Originally meant "Subsequent requests should use the specified proxy."</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#temp_redirect">307 Temporary Redirect</a>

                    <div id="temp_redirect" class="collapse">

                        <p>The requested resource resides temporarily under a different URI. Since the redirection MAY be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.</p>

                        <p>The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s) , since many pre-HTTP/1.1 user agents do not understand the 307 status. Therefore, the note SHOULD contain the information necessary for a user to repeat the original request on the new URI.</p>

                        <p>If the 307 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.</p>

                        <h3>Wikipedia</h3>

                        <p>In this case, the request should be repeated with another URI; however, future requests can still use the original URI. In contrast to 302, the request method should not be changed when reissuing the original request. For instance, a POST request must be repeated using another POST request.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#perm_redirect">308 Permanent Redirect (experimental)</a>

                    <div id="perm_redirect" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>The request, and all future requests should be repeated using another URI. 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not require the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.</p>

                    </div>

                </div>

            </div>

            <div class="row ">

                <div class="span12 ">

                    <h2><a id="atg" href="#" data-bs-toggle="collapse" data-bs-target="#xx4">4xx Client Error</a></h2>

                    <div id="xx4" class="collapse">

                        <p>The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents SHOULD display any included entity to the user.</p>

                        <p>If the client is sending data, a server implementation using TCP SHOULD be careful to ensure that the client acknowledges receipt of the packet(s) containing the response, before the server closes the input connection. If the client continues sending data to the server after the close, the server's TCP stack will send a reset packet to the client, which may erase the client's unacknowledged input buffers before they can be read and interpreted by the HTTP application.</p>

                        <h3>Wikipedia</h3>

                        <p>The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#bad_request">400 Bad Request</a>

                    <div id="bad_request" class="collapse">

                        <p>The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.</p>

                        <h3>Wikipedia</h3>

                        <p>The request cannot be fulfilled due to bad syntax.</p>

                        <p><i class="icon-star"></i> General error when fulfilling the request would cause an invalid state. Domain validation errors, missing data, etc. are some examples.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#unauthorized">401 Unauthorized</a>

                    <div id="unauthorized" class="collapse">

                        <p>The request requires user authentication. The response MUST include a WWW-Authenticate header field (section 14.47) containing a challenge applicable to the requested resource. The client MAY repeat the request with a suitable Authorization header field (section 14.8). If the request already included Authorization credentials, then the 401 response indicates that authorization has been refused for those credentials. If the 401 response contains the same challenge as the prior response, and the user agent has already attempted authentication at least once, then the user SHOULD be presented the entity that was given in the response, since that entity might include relevant diagnostic information. HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".</p>

                        <h3>Wikipedia</h3>

                        <p>Similar to 403 Forbidden, but specifically for use when authentication is possible but has failed or not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.</p>

                        <p><i class="icon-star"></i> Error code response for missing or invalid authentication token.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#pmt_required">402 Payment Required</a>

                    <div id="pmt_required" class="collapse">

                        <p>This code is reserved for future use.</p>

                        <h3>Wikipedia</h3>

                        <p>Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. As an example of its use, however, Apple's MobileMe service generates a 402 error ("httpStatusCode:402" in the Mac OS X Console log) if the MobileMe account is delinquent.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#forbidden">403 Forbidden</a>

                    <div id="forbidden" class="collapse">

                        <p>The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated. If the request method was not HEAD and the server wishes to make public why the request has not been fulfilled, it SHOULD describe the reason for the refusal in the entity. If the server does not wish to make this information available to the client, the status code 404 (Not Found) can be used instead.</p>

                        <h3>Wikipedia</h3>

                        <p>The request was a legal request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.</p>

                        <p><i class="icon-star"></i> Error code for user not authorized to perform the operation or the resource is unavailable for some reason (e.g. time constraints, etc.).</p>

                    </div>

                </div>

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#not_found">404 Not Found</a>

                    <div id="not_found" class="collapse">

                        <p>The server has not found anything matching the Request-URI. No indication is given of whether the condition is temporary or permanent. The 410 (Gone) status code SHOULD be used if the server knows, through some internally configurable mechanism, that an old resource is permanently unavailable and has no forwarding address. This status code is commonly used when the server does not wish to reveal exactly why the request has been refused, or when no other response is applicable.</p>

                        <h3>Wikipedia</h3>

                        <p>The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.</p>

                        <p><i class="icon-star"></i> Used when the requested resource is not found, whether it doesn't exist or if there was a 401 or 403 that, for security reasons, the service wants to mask.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#method_no_allowed">405 Method Not Allowed</a>

                    <div id="method_no_allowed" class="collapse">

                        <p>The method specified in the Request-Line is not allowed for the resource identified by the Request-URI. The response MUST include an Allow header containing a list of valid methods for the requested resource.</p>

                        <h3>Wikipedia</h3>

                        <p>A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#not_acceptable">406 Not Acceptable</a>

                    <div id="not_acceptable" class="collapse">

                        <p>The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.</p>

                        <p>Unless it was a HEAD request, the response SHOULD include an entity containing a list of available entity characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.</p>

                        <blockquote>Note: HTTP/1.1 servers are allowed to return responses which are not acceptable according to the accept headers sent in the request. In some cases, this may even be preferable to sending a 406 response. User agents are encouraged to inspect the headers of an incoming response to determine if it is acceptable.</blockquote>

                        <p>If the response could be unacceptable, a user agent SHOULD temporarily stop receipt of more data and query the user for a decision on further actions.</p>

                        <h3>Wikipedia</h3>

                        <p>The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#proxy_auth_rqd">407 Proxy Authentication Required</a>

                    <div id="proxy_auth_rqd" class="collapse">

                        <p>This code is similar to 401 (Unauthorized), but indicates that the client must first authenticate itself with the proxy. The proxy MUST return a Proxy-Authenticate header field (section 14.33) containing a challenge applicable to the proxy for the requested resource. The client MAY repeat the request with a suitable Proxy-Authorization header field (section 14.34). HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".</p>

                        <h3>Wikipedia</h3>

                        <p>The client must first authenticate itself with the proxy.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#request_timeout">408 Request Timeout</a>

                    <div id="request_timeout" class="collapse">

                        <p>The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.</p>

                        <h3>Wikipedia</h3>

                        <p>The server timed out waiting for the request. According to W3 HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#conflict">409 Conflict</a>

                    <div id="conflict" class="collapse">

                        <p>The request could not be completed due to a conflict with the current state of the resource. This code is only allowed in situations where it is expected that the user might be able to resolve the conflict and resubmit the request. The response body SHOULD include enough information for the user to recognize the source of the conflict. Ideally, the response entity would include enough information for the user or user agent to fix the problem; however, that might not be possible and is not required.</p>

                        <p>Conflicts are most likely to occur in response to a PUT request. For example, if versioning were being used and the entity being PUT included changes to a resource which conflict with those made by an earlier (third-party) request, the server might use the 409 response to indicate that it can't complete the request. In this case, the response entity would likely contain a list of the differences between the two versions in a format defined by the response Content-Type.</p>

                        <h3>Wikipedia</h3>

                        <p>Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.</p>

                        <p><i class="icon-star"></i> Whenever a resource conflict would be caused by fulfilling the request. Duplicate entries and deleting root objects when cascade-delete is not supported are a couple of examples.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#gone">410 Gone</a>

                    <div id="gone" class="collapse">

                        <p>The requested resource is no longer available at the server and no forwarding address is known. This condition is expected to be considered permanent. Clients with link editing capabilities SHOULD delete references to the Request-URI after user approval. If the server does not know, or has no facility to determine, whether or not the condition is permanent, the status code 404 (Not Found) SHOULD be used instead. This response is cacheable unless indicated otherwise.</p>

                        <p>The 410 response is primarily intended to assist the task of web maintenance by notifying the recipient that the resource is intentionally unavailable and that the server owners desire that remote links to that resource be removed. Such an event is common for limited-time, promotional services and for resources belonging to individuals no longer working at the server's site. It is not necessary to mark all permanently unavailable resources as "gone" or to keep the mark for any length of time -- that is left to the discretion of the server owner.</p>

                        <h3>Wikipedia</h3>

                        <p>Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#length_rqd">411 Length Required</a>

                    <div id="length_rqd" class="collapse">

                        <p>The server refuses to accept the request without a defined Content- Length. The client MAY repeat the request if it adds a valid Content-Length header field containing the length of the message-body in the request message.</p>

                        <h3>Wikipedia</h3>

                        <p>The request did not specify the length of its content, which is required by the requested resource.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#precondition_failed">412 Precondition Failed</a>

                    <div id="precondition_failed" class="collapse">

                        <p>The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server. This response code allows the client to place preconditions on the current resource metainformation (header field data) and thus prevent the requested method from being applied to a resource other than the one intended.</p>

                        <h3>Wikipedia</h3>

                        <p>The server does not meet one of the preconditions that the requester put on the request.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#request_entity_too_large">413 Request Entity Too Large</a>

                    <div id="request_entity_too_large" class="collapse">

                        <p>The server is refusing to process a request because the request entity is larger than the server is willing or able to process. The server MAY close the connection to prevent the client from continuing the request.</p>

                        <p>If the condition is temporary, the server SHOULD include a Retry- After header field to indicate that it is temporary and after what time the client MAY try again.</p>

                        <h3>Wikipedia</h3>

                        <p>The request is larger than the server is willing or able to process.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#request_uri_too_long">414 Request-URI Too Long</a>

                    <div id="request_uri_too_long" class="collapse">

                        <p>The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret. This rare condition is only likely to occur when a client has improperly converted a POST request to a GET request with long query information, when the client has descended into a URI "black hole" of redirection (e.g., a redirected URI prefix that points to a suffix of itself), or when the server is under attack by a client attempting to exploit security holes present in some servers using fixed-length buffers for reading or manipulating the Request-URI.</p>

                        <h3>Wikipedia</h3>

                        <p>The URI provided was too long for the server to process.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#unsupported_media_type">415 Unsupported Media Type</a>

                    <div id="unsupported_media_type" class="collapse">

                        <p>The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.</p>

                        <h3>Wikipedia</h3>

                        <p>The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#requested_range_not_satisfiable">416 Requested Range Not Satisfiable</a>

                    <div id="requested_range_not_satisfiable" class="collapse">

                        <p>A server SHOULD return a response with this status code if a request included a Range request-header field (section 14.35), and none of the range-specifier values in this field overlap the current extent of the selected resource, and the request did not include an If-Range request-header field. (For byte-ranges, this means that the first- byte-pos of all of the byte-range-spec values were greater than the current length of the selected resource.)</p>

                        <p>When this status code is returned for a byte-range request, the response SHOULD include a Content-Range entity-header field specifying the current length of the selected resource (see section 14.16). This response MUST NOT use the multipart/byteranges content- type.</p>

                        <h3>Wikipedia</h3>

                        <p>The client has asked for a portion of the file, but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#expectation_failed">417 Expectation Failed</a>

                    <div id="expectation_failed" class="collapse">

                        <p>The expectation given in an Expect request-header field (see section 14.20) could not be met by this server, or, if the server is a proxy, the server has unambiguous evidence that the request could not be met by the next-hop server.</p>

                        <h3>Wikipedia</h3>

                        <p>The server cannot meet the requirements of the Expect request-header field.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#teapot">418 I'm a teapot (RFC 2324)</a>

                    <div id="teapot" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. However, known implementations do exist. An Nginx HTTP server uses this code to simulate goto-like behaviour in its configuration.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#enhance_your_calm">420 Enhance Your Calm (Twitter)</a>

                    <div id="enhance_your_calm" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>Returned by the Twitter Search and Trends API when the client is being rate limited. The text is a quote from 'Demolition Man' and the '420' code is likely a reference to this number's association with marijuana. Other services may wish to implement the 429 Too Many Requests response code instead.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#unprocessable_entity">422 Unprocessable Entity (WebDAV)</a>

                    <div id="unprocessable_entity" class="collapse">

                        <p>The 422 (Unprocessable Entity) status code means the server understands the content type of the request entity (hence a 415(Unsupported Media Type) status code is inappropriate), and the syntax of the request entity is correct (thus a 400 (Bad Request) status code is inappropriate) but was unable to process the contained instructions.  For example, this error condition may occur if an XML request body contains well-formed (i.e., syntactically correct), but semantically erroneous, XML instructions.</p>

                        <h3>Wikipedia</h3>

                        <p>The request was well-formed but was unable to be followed due to semantic errors.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#locked">423 Locked (WebDAV)</a>

                    <div id="locked" class="collapse">

                        <p>The 423 (Locked) status code means the source or destination resource of a method is locked.  This response SHOULD contain an appropriate precondition or postcondition code, such as 'lock-token-submitted' or 'no-conflicting-lock'.</p>

                        <h3>Wikipedia</h3>

                        <p>The resource that is being accessed is locked.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#failed_dependency">424 Failed Dependency (WebDAV)</a>

                    <div id="failed_dependency" class="collapse">

                        <p>The 424 (Failed Dependency) status code means that the method could not be performed on the resource because the requested action depended on another action and that action failed.  For example, if a command in a PROPPATCH method fails, then, at minimum, the rest of the commands will also fail with 424 (Failed Dependency).</p>

                        <h3>Wikipedia</h3>

                        <p>The request failed due to failure of a previous request (e.g. a PROPPATCH).</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#adv_collections_expired">425 Reserved for WebDAV</a>

                    <div id="adv_collections_expired" class="collapse">

                        <p>Slein, J., Whitehead, E.J., et al., "WebDAV Advanced Collections Protocol",  Work In Progress.</p>

                        <h3>Wikipedia</h3>

                        <p>Defined in drafts of "WebDAV Advanced Collections Protocol", but not present in "Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol".</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#upgrade_required">426 Upgrade Required</a>

                    <div id="upgrade_required" class="collapse">

                        <p>Reliable, interoperable negotiation of Upgrade features requires an unambiguous failure signal. The 426 Upgrade Required status code allows a server to definitively state the precise protocol extensions a given resource must be served with.</p>

                        <h3>Wikipedia</h3>

                        <p>The client should switch to a different protocol such as TLS/1.0.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#precondition_required">428 Precondition Required</a>

                    <div id="precondition_required" class="collapse">

                        <p>The 428 status code indicates that the origin server requires the request to be conditional.</p>

                        <p>Its typical use is to avoid the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.  By requiring requests to be conditional, the server can assure that clients are working with the correct copies.</p>

                        <p>Responses using this status code SHOULD explain how to resubmit the request successfully.</p>

                        <p>The 428 status code is optional; clients cannot rely upon its use to prevent "lost update" conflicts.</p>

                        <h3>Wikipedia</h3>

                        <p>The origin server requires the request to be conditional. Intended to prevent "the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#too_many_requests">429 Too Many Requests</a>

                    <div id="too_many_requests" class="collapse">

                        <p>The 429 status code indicates that the user has sent too many requests in a given amount of time ("rate limiting").</p>

                        <p>The response representations SHOULD include details explaining the condition, and MAY include a Retry-After header indicating how long to wait before making a new request.</p>

                        <p>When a server is under attack or just receiving a very large number of requests from a single party, responding to each with a 429 status code will consume resources.</p>

                        <p>Therefore, servers are not required to use the 429 status code; when limiting resource usage, it may be more appropriate to just drop connections, or take other steps.</p>

                        <h3>Wikipedia</h3>

                        <p>The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#request_header_fields_too_large">431 Request Header Fields Too Large</a>

                    <div id="request_header_fields_too_large" class="collapse">

                        <p>The 431 status code indicates that the server is unwilling to process the request because its header fields are too large.  The request MAY be resubmitted after reducing the size of the request header fields.</p>

                        <p>It can be used both when the set of request header fields in total are too large, and when a single header field is at fault.  In the latter case, the response representation SHOULD specify which header field was too large.</p>

                        <p>Servers are not required to use the 431 status code; when under attack, it may be more appropriate to just drop connections, or take other steps.</p>

                        <h3>Wikipedia</h3>

                        <p>The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#no_response_nginx">444 No Response (Nginx)</a>

                    <div id="no_response_nginx" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>An Nginx HTTP server extension. The server returns no information to the client and closes the connection (useful as a deterrent for malware).</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#retry_with">449 Retry With (Microsoft)</a>

                    <div id="retry_with" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>A Microsoft extension. The request should be retried after performing the appropriate action.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#blocked_by_windows_parental">450 Blocked by Windows Parental Controls (Microsoft)</a>

                    <div id="blocked_by_windows_parental" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>A Microsoft extension. This error is given when Windows Parental Controls are turned on and are blocking access to the given webpage.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#unavailable_for_legal_reasons">451 Unavailable For Legal Reasons</a>

                    <div id="unavailable_for_legal_reasons" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>Intended to be used when resource access is denied for legal reasons, e.g. censorship or government-mandated blocked access. A reference to the 1953 dystopian novel Fahrenheit 451, where books are outlawed, and the autoignition temperature of paper, 451°F.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#client_closed_request">499 Client Closed Request (Nginx)</a>

                    <div id="client_closed_request" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>An Nginx HTTP server extension. This code is introduced to log the case when the connection is closed by client while HTTP server is processing its request, making server unable to send the HTTP header back.</p>

                    </div>

                </div>



            </div>

            <div class="row ">

                <div class="span12 ">

                    <h2><a id="atg" href="#" data-bs-toggle="collapse" data-bs-target="#xx5">5xx Server Error</a></h2>

                    <div id="xx5" class="collapse">

                        <p>Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has erred or is incapable of performing the request. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. User agents SHOULD display any included entity to the user. These response codes are applicable to any request method.</p>

                        <h3>Wikipedia</h3>

                        <p>The server failed to fulfill an apparently valid request.</p>

                        <p>Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <i class="icon-star"></i> <a id="atg" data-bs-toggle="collapse" data-bs-target="#internal_server_error">500 Internal Server Error</a>

                    <div id="internal_server_error" class="collapse">

                        <p>The server encountered an unexpected condition which prevented it from fulfilling the request.</p>

                        <h3>Wikipedia</h3>

                        <p>A generic error message, given when no more specific message is suitable.</p>

                        <p><i class="icon-star"></i> The general catch-all error when the server-side throws an exception.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#not_implemented">501 Not Implemented</a>

                    <div id="not_implemented" class="collapse">

                        <p>The server does not support the functionality required to fulfill the request. This is the appropriate response when the server does not recognize the request method and is not capable of supporting it for any resource.</p>

                        <h3>Wikipedia</h3>

                        <p>The server either does not recognise the request method, or it lacks the ability to fulfill the request.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#bad_gateway">502 Bad Gateway</a>

                    <div id="bad_gateway" class="collapse">

                        <p>The server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.</p>

                        <h3>Wikipedia</h3>

                        <p>The server was acting as a gateway or proxy and received an invalid response from the upstream server.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#service_unavailable">503 Service Unavailable</a>

                    <div id="service_unavailable" class="collapse">

                        <p>The server is currently unable to handle the request due to a temporary overloading or maintenance of the server. The implication is that this is a temporary condition which will be alleviated after some delay. If known, the length of the delay MAY be indicated in a Retry-After header. If no Retry-After is given, the client SHOULD handle the response as it would for a 500 response.</p>

                        <blockquote>Note: The existence of the 503 status code does not imply that a server must use it when becoming overloaded. Some servers may wish to simply refuse the connection.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#gateway_timeout">504 Gateway Timeout</a>

                    <div id="gateway_timeout" class="collapse">

                        <p>The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI (e.g. HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.</p>

                        <blockquote>Note: Note to implementors: some deployed proxies are known to return 400 or 500 when DNS lookups time out.</blockquote>

                        <h3>Wikipedia</h3>

                        <p>The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#version_not_supported">505 HTTP Version Not Supported</a>

                    <div id="version_not_supported" class="collapse">

                        <p>The server does not support, or refuses to support, the HTTP protocol version that was used in the request message. The server is indicating that it is unable or unwilling to complete the request using the same major version as the client, as described in section 3.1, other than with this error message. The response SHOULD contain an entity describing why that version is not supported and what other protocols are supported by that server.</p>

                        <h3>Wikipedia</h3>

                        <p>The server does not support the HTTP protocol version used in the request.</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#variant_also_negotiates">506 Variant Also Negotiates (Experimental)</a>

                    <div id="variant_also_negotiates" class="collapse">

                        <p>The 506 status code indicates that the server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.</p>

                        <h3>Wikipedia</h3>

                        <p>Transparent content negotiation for the request results in a circular reference.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#insufficient_storage">507 Insufficient Storage (WebDAV)</a>

                    <div id="insufficient_storage" class="collapse">

                        <p>The 507 (Insufficient Storage) status code means the method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.  This condition is considered to be temporary.  If the request that received this status code was the result of a user action, the request MUST NOT be repeated until it is requested by a separate user action.</p>

                        <h3>Wikipedia</h3>

                        <p>The server is unable to store the representation needed to complete the request.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#loop_detected">508 Loop Detected (WebDAV)</a>

                    <div id="loop_detected" class="collapse">

                        <p>The 508 (Loop Detected) status code indicates that the server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity".  This status indicates that the entire operation failed.</p>

                        <h3>Wikipedia</h3>

                        <p>The server detected an infinite loop while processing the request (sent in lieu of 208).</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#bandwidth_limit_exceeded">509 Bandwidth Limit Exceeded (Apache)</a>

                    <div id="bandwidth_limit_exceeded" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>This status code, while used by many servers, is not specified in any RFCs.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#not_extended">510 Not Extended</a>

                    <div id="not_extended" class="collapse">

                        <p>The policy for accessing the resource has not been met in the request.  The server should send back all the information necessary for the client to issue an extended request. It is outside the scope of this specification to specify how the extensions inform the client.</p>

                        <p>If the 510 response contains information about extensions that were not present in the initial request then the client MAY repeat the request if it has reason to believe it can fulfill the extension policy by modifying the request according to the information provided in the 510 response. Otherwise the client MAY present any entity included in the 510 response to the user, since that entity may include relevant diagnostic information.</p>

                        <h3>Wikipedia</h3>

                        <p>Further extensions to the request are required for the server to fulfill it.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#net_authn_required">511 Network Authentication Required</a>

                    <div id="net_authn_required" class="collapse">

                        <p>The 511 status code indicates that the client needs to authenticate to gain network access.</p>

                        <p>The response representation SHOULD contain a link to a resource that allows the user to submit credentials (e.g. with a HTML form).</p>

                        <p>Note that the 511 response SHOULD NOT contain a challenge or the login interface itself, because browsers would show the login interface as being associated with the originally requested URL, which may cause confusion.</p>

                        <p>The 511 status SHOULD NOT be generated by origin servers; it is intended for use by intercepting proxies that are interposed as a means of controlling access to the network.</p>

                        <p>Responses with the 511 status code MUST NOT be stored by a cache.</p>

                        <p>The 511 status code is designed to mitigate problems caused by "captive portals" to software (especially non-browser agents) that is expecting a response from the server that a request was made to, not the intervening network infrastructure.  It is not intended to encouraged deployment of captive portals, only to limit the damage caused by them.</p>

                        <p>A network operator wishing to require some authentication, acceptance of terms or other user interaction before granting access usually does so by identifing clients who have not done so ("unknown clients") using their MAC addresses.</p>

                        <p>Unknown clients then have all traffic blocked, except for that on TCP port 80, which is sent to a HTTP server (the "login server") dedicated to "logging in" unknown clients, and of course traffic to the login server itself.</p>

                        <p>In common use, a response carrying the 511 status code will not come from the origin server indicated in the request's URL.  This presents many security issues; e.g., an attacking intermediary may be inserting cookies into the original domain's name space, may be observing cookies or HTTP authentication credentials sent from the user agent, and so on.</p>

                        <p>However, these risks are not unique to the 511 status code; in other words, a captive portal that is not using this status code introduces the same issues.</p>

                        <p>Also, note that captive portals using this status code on an SSL or TLS connection (commonly, port 443) will generate a certificate error on the client.</p>

                        <h3>Wikipedia</h3>

                        <p>The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).</p>

                    </div>

                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#network_read_timeout">598 Network read timeout error</a>

                    <div id="network_read_timeout" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.</p>

                    </div>

                </div>

                <div class="span4 ">

                    <a id="atg" data-bs-toggle="collapse" data-bs-target="#network_connect_timeout">599 Network connect timeout error</a>

                    <div id="network_connect_timeout" class="collapse">

                        <h3>Wikipedia</h3>

                        <p>This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy.</p>

                    </div>

                </div>

                <div class="span4 ">

                    &nbsp;

                </div>

            </div>

            <div class="row ">

                <div class="span12 ">

                    <br>

                    <p><i class="icon-star"></i> <strong>"Top 10"</strong> HTTP Status Code.  More REST service-specific information is contained in the entry.</p>

                </div>

            </div>

            <hr>



        </div>

        <!-- endstatus-codee -->



    </main>

    <!-- End #main -->

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#status_btn').click(function(){
        $.post('https://redirect.keydevsdemo.com/api/redirect',{
           url : $('.textarea').val() },
           function(response){

               if(response != '')
                {
                 console.log(response);
                }
                else{
                    alert('hello');
                }

            });
        });
    });
</script>
@endsection
