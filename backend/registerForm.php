<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>FtinessStudio</title>
    </head>
    <body>
        <div style="display:flex;">
            <div style="margin: 3%;">
                <form method="POST" action="register.php">
                    <input required name="name" placeholder="Imie" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;">
                    <input required name="surname" placeholder="Nazwisko" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;">
                    <input required name="email" placeholder="name@domena.xx" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;"><br /><br />
                    <input required name="login" placeholder="Login" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;">
                    <input required name="password" type="password" placeholder="********" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;"><br /><br />
                    <select required name="dialling_code" id="" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px; width:130px;">
                        <option data-countryCode="PL" value="48" selected>Poland (+48)</option>
                        <optgroup label="Other countries">
                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                            <option data-countryCode="CN" value="86">China (+86)</option>
                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                            <option data-countryCode="FR" value="33">France (+33)</option>
                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                            <option data-countryCode="IN" value="91">India (+91)</option>
                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                            <option data-countryCode="GB" value="44">UK (+44)</option>
                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                            <option data-countryCode="US" value="1">USA (+1)</option>
                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        </optgroup>
                    </select>
                    <input required name="phone-number" type="tel" id="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{3}"placeholder="000000000" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;" maxlength="9"><br /><br />
                    <input type="submit" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;" value="Zarejestruj">
                </form>
            </div>
            <div>
                <!--<svg width="1086" height="756" viewBox="0 0 1086 756" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Frame 1">
                    <rect width="1086" height="756" fill="white"/>
                    <path id="Vector" opacity="0.1" d="M50.7477 258.035C43.0677 281.285 65.6477 302.195 83.4077 319.035C107.717 342.137 126.899 370.091 139.708 401.085C147.428 419.815 152.798 439.965 151.358 460.175C147.278 517.495 93.2977 555.685 50.1677 593.655C44.0577 599.085 37.9477 604.765 34.3877 612.085C22.9577 635.575 42.3877 662.645 63.7877 677.625C139.998 730.945 249.998 715.085 323.918 658.635C362.198 629.395 395.098 589.635 441.488 576.635C471.148 568.365 502.628 572.285 533.318 574.835C579.334 578.647 625.563 579.196 671.658 576.475C687.838 575.475 704.758 573.915 718.308 565.025C752.618 542.545 746.828 489.245 771.588 456.545C789.388 433.045 819.798 423.985 846.268 410.995C887.011 390.89 921.008 359.343 944.098 320.215C965.348 284.045 976.358 242.925 987.098 202.385C995.198 171.925 1003.33 140.025 996.468 109.255C989.608 78.4849 962.528 49.7549 931.128 52.4549C907.018 54.5249 887.838 73.5749 864.618 80.3949C808.998 96.7749 754.998 39.8849 697.298 45.3749C660.968 48.8249 631.668 76.3748 609.518 105.375C587.368 134.375 568.618 167.025 539.368 188.865C493.868 222.865 431.528 224.065 375.828 213.055C320.128 202.045 266.688 180.375 210.368 173.155C177.188 168.905 151.758 188.675 121.878 199.545C94.4577 209.525 60.9077 227.285 50.7477 258.035Z" fill="#08070A"/>
                    <path id="Vector_2" opacity="0.1" d="M170.95 712.18C211.123 712.18 243.69 702.286 243.69 690.08C243.69 677.875 211.123 667.98 170.95 667.98C130.777 667.98 98.21 677.875 98.21 690.08C98.21 702.286 130.777 712.18 170.95 712.18Z" fill="#7A7A7E"/>
                    <path id="Vector_3" opacity="0.1" d="M857.232 422.91C964.525 422.91 1051.5 417.139 1051.5 410.02C1051.5 402.901 964.525 397.13 857.232 397.13C749.94 397.13 662.962 402.901 662.962 410.02C662.962 417.139 749.94 422.91 857.232 422.91Z" fill="#444447"/>
                    <g id="chair">
                        <g id="Group" opacity="0.5">
                        <path id="Vector_4" opacity="0.5" d="M739.782 115C742.477 115 745.061 116.071 746.967 117.976C748.872 119.881 749.942 122.466 749.942 125.16V407.66H729.622V125.15C729.625 122.457 730.697 119.876 732.602 117.972C734.507 116.069 737.09 115 739.782 115V115Z" fill="#02010B"/>
                        <path id="Vector_5" opacity="0.5" d="M962.712 115C965.407 115 967.991 116.071 969.897 117.976C971.802 119.881 972.872 122.466 972.872 125.16V407.66H952.502V125.15C952.504 123.813 952.769 122.488 953.283 121.254C953.798 120.019 954.551 118.898 955.499 117.955C956.448 117.012 957.574 116.265 958.811 115.758C960.049 115.251 961.375 114.994 962.712 115V115Z" fill="#02010B"/>
                        <path id="Vector_6" opacity="0.5" d="M1022.01 178.15C1027.62 178.15 1032.17 173.601 1032.17 167.99C1032.17 162.379 1027.62 157.83 1022.01 157.83L680.492 157.83C674.881 157.83 670.332 162.379 670.332 167.99C670.332 173.601 674.881 178.15 680.492 178.15L1022.01 178.15Z" fill="#02010B"/>
                        <path id="Vector_7" opacity="0.5" d="M723.582 137.78C723.582 133.384 720.019 129.82 715.622 129.82C711.226 129.82 707.662 133.384 707.662 137.78V198.18C707.662 202.576 711.226 206.14 715.622 206.14C720.019 206.14 723.582 202.576 723.582 198.18V137.78Z" fill="#02010B"/>
                        <path id="Vector_8" opacity="0.5" d="M707.662 144.92C707.662 140.524 704.099 136.96 699.702 136.96C695.306 136.96 691.742 140.524 691.742 144.92V191.05C691.742 195.446 695.306 199.01 699.702 199.01C704.099 199.01 707.662 195.446 707.662 191.05V144.92Z" fill="#02010B"/>
                        <path id="Vector_9" opacity="0.5" d="M978.912 198.18C978.912 202.576 982.476 206.14 986.872 206.14C991.269 206.14 994.832 202.576 994.832 198.18V137.78C994.832 133.384 991.269 129.82 986.872 129.82C982.476 129.82 978.912 133.384 978.912 137.78V198.18Z" fill="#02010B"/>
                        <path id="Vector_10" opacity="0.5" d="M994.832 191.04C994.832 195.436 998.396 199 1002.79 199C1007.19 199 1010.75 195.436 1010.75 191.04V144.91C1010.75 140.514 1007.19 136.95 1002.79 136.95C998.396 136.95 994.832 140.514 994.832 144.91V191.04Z" fill="#02010B"/>
                        </g>
                        <g id="Group_2" opacity="0.5">
                        <path id="Vector_11" opacity="0.5" d="M830.962 233.24H872.502C877.011 233.24 881.335 235.031 884.523 238.219C887.711 241.407 889.502 245.731 889.502 250.24V321.6H814.002V250.24C814.002 245.738 815.788 241.42 818.967 238.233C822.147 235.046 826.461 233.251 830.962 233.24Z" fill="#010110"/>
                        <path id="Vector_12" opacity="0.5" d="M857.232 315.19H846.182V352.02H857.232V315.19Z" fill="#010110"/>
                        <path id="Vector_13" opacity="0.5" d="M835.133 356.62H824.083V393.45H835.133V356.62Z" fill="#010110"/>
                        <path id="Vector_14" opacity="0.5" d="M881.172 356.62H870.122V393.45H881.172V356.62Z" fill="#010110"/>
                        <path id="Vector_15" opacity="0.5" d="M889.462 349.25H813.962V359.38H889.462V349.25Z" fill="#010110"/>
                        </g>
                    </g>
                    <path id="Vector_16" opacity="0.1" d="M506.09 652.33C734.913 652.33 920.41 638.728 920.41 621.95C920.41 605.172 734.913 591.57 506.09 591.57C277.267 591.57 91.77 605.172 91.77 621.95C91.77 638.728 277.267 652.33 506.09 652.33Z" fill="#747561"/>
                    <g id="weigh">
                        <g id="Big Weigh">
                        <path id="Vector_17" d="M104.636 453L74.0036 453.625L69 460.495L69 484.25L75.2528 488.629L104.636 488.629L110.882 481.752L110.882 459.246L104.636 453Z" fill="#6F6E76"/>
                        <path id="Vector_18" d="M107.134 521.76L112.138 526.763L112.138 550.525L107.134 555.529C107.134 555.529 89.0074 561.781 77.1333 556.778L71.5051 551.15L71.5051 527.388L76.5087 521.76L107.134 521.76Z" fill="#6F6E76"/>
                        <path id="Vector_19" opacity="0.2" d="M103.556 456.748C103.556 456.748 75.4292 461.127 72.924 456.748L73.5486 453.625L103.556 453L103.556 456.748Z" fill="white"/>
                        <path id="Vector_20" d="M107.134 521.76L112.138 526.763L112.138 550.525L107.134 555.529C107.134 555.529 89.0074 561.781 77.1333 556.778L71.5051 551.15L71.5051 527.388L76.5087 521.76L107.134 521.76Z" fill="#6F6E76"/>
                        <path id="Vector_21" opacity="0.2" d="M103.556 456.748C103.556 456.748 75.4292 461.127 72.924 456.748L73.5486 453.625L103.556 453L103.556 456.748Z" fill="white"/>
                        <path id="Vector_22" opacity="0.2" d="M105.457 527.381C105.457 527.381 83.5761 532.385 76.081 527.381L76.081 521.753L106.707 521.753L105.457 527.381Z" fill="white"/>
                        <path id="Vector_23" d="M95.1651 486.981L95.1651 520.797C95.1651 523.445 92.7889 525.59 89.8492 525.59C86.9163 525.59 84.5334 523.445 84.5334 520.797L84.5334 486.981C84.5334 484.109 87.3101 481.882 90.467 482.229C93.1487 482.507 95.1651 484.557 95.1651 486.981Z" fill="#6F6E76"/>
                        </g>
                        <g id="Big Weigh_2">
                        <path id="Vector_24" d="M154.636 453L124.004 453.625L119 460.495L119 484.25L125.253 488.629L154.636 488.629L160.882 481.752L160.882 459.246L154.636 453Z" fill="#6F6E76"/>
                        <path id="Vector_25" d="M157.134 521.76L162.138 526.763L162.138 550.525L157.134 555.529C157.134 555.529 139.007 561.781 127.133 556.778L121.505 551.15L121.505 527.388L126.509 521.76L157.134 521.76Z" fill="#6F6E76"/>
                        <path id="Vector_26" opacity="0.2" d="M153.556 456.748C153.556 456.748 125.429 461.127 122.924 456.748L123.549 453.625L153.556 453L153.556 456.748Z" fill="white"/>
                        <path id="Vector_27" d="M157.134 521.76L162.138 526.763L162.138 550.525L157.134 555.529C157.134 555.529 139.007 561.781 127.133 556.778L121.505 551.15L121.505 527.388L126.509 521.76L157.134 521.76Z" fill="#6F6E76"/>
                        <path id="Vector_28" opacity="0.2" d="M153.556 456.748C153.556 456.748 125.429 461.127 122.924 456.748L123.549 453.625L153.556 453L153.556 456.748Z" fill="white"/>
                        <path id="Vector_29" opacity="0.2" d="M155.457 527.381C155.457 527.381 133.576 532.385 126.081 527.381L126.081 521.753L156.707 521.753L155.457 527.381Z" fill="white"/>
                        <path id="Vector_30" d="M145.165 486.981L145.165 520.797C145.165 523.445 142.789 525.59 139.849 525.59C136.916 525.59 134.533 523.445 134.533 520.797L134.533 486.981C134.533 484.109 137.31 481.882 140.467 482.229C143.149 482.507 145.165 484.557 145.165 486.981Z" fill="#6F6E76"/>
                        </g>
                        <g id="Small Weigh">
                        <path id="Vector_31" d="M210.557 467L184.29 467.52L180 473.241L180 493.021L185.362 496.667L210.557 496.667L215.912 490.94L215.912 472.201L210.557 467Z" fill="#6F6E76"/>
                        <path id="Vector_32" d="M212.463 524.772L216.693 529L216.693 549.077L212.463 553.305C212.463 553.305 197.139 558.588 187.1 554.36L182.342 549.605L182.342 529.527L186.572 524.772L212.463 524.772Z" fill="#6F6E76"/>
                        <path id="Vector_33" opacity="0.2" d="M209.667 470.083C209.667 470.083 186.01 473.686 183.904 470.083L184.429 467.514L209.667 467L209.667 470.083Z" fill="white"/>
                        <path id="Vector_34" d="M212.463 524.772L216.693 529L216.693 549.077L212.463 553.305C212.463 553.305 197.139 558.588 187.1 554.36L182.342 549.605L182.342 529.527L186.572 524.772L212.463 524.772Z" fill="#6F6E76"/>
                        <path id="Vector_35" opacity="0.2" d="M209.667 470.083C209.667 470.083 186.01 473.686 183.904 470.083L184.429 467.514L209.667 467L209.667 470.083Z" fill="white"/>
                        <path id="Vector_36" opacity="0.2" d="M210.958 529.808C210.958 529.808 192.551 534.286 186.246 529.808L186.246 524.772L212.009 524.772L210.958 529.808Z" fill="white"/>
                        <path id="Vector_37" d="M202.64 495.25L202.64 523.842C202.64 526.081 200.547 527.895 197.956 527.895C195.372 527.895 193.272 526.081 193.272 523.842L193.272 495.25C193.272 492.822 195.719 490.939 198.501 491.232C200.864 491.467 202.64 493.201 202.64 495.25Z" fill="#6F6E76"/>
                        </g>
                        <g id="Small Weigh_2">
                        <path id="Vector_38" d="M256.557 467L230.29 467.52L226 473.241L226 493.021L231.362 496.667L256.557 496.667L261.912 490.94L261.912 472.201L256.557 467Z" fill="#6F6E76"/>
                        <path id="Vector_39" d="M258.463 524.772L262.693 529L262.693 549.077L258.463 553.305C258.463 553.305 243.139 558.588 233.1 554.36L228.342 549.605L228.342 529.527L232.572 524.772L258.463 524.772Z" fill="#6F6E76"/>
                        <path id="Vector_40" opacity="0.2" d="M255.667 470.083C255.667 470.083 232.01 473.686 229.904 470.083L230.429 467.514L255.667 467L255.667 470.083Z" fill="white"/>
                        <path id="Vector_41" d="M258.463 524.772L262.693 529L262.693 549.077L258.463 553.305C258.463 553.305 243.139 558.588 233.1 554.36L228.342 549.605L228.342 529.527L232.572 524.772L258.463 524.772Z" fill="#6F6E76"/>
                        <path id="Vector_42" opacity="0.2" d="M255.667 470.083C255.667 470.083 232.01 473.686 229.904 470.083L230.429 467.514L255.667 467L255.667 470.083Z" fill="white"/>
                        <path id="Vector_43" opacity="0.2" d="M256.958 529.808C256.958 529.808 238.551 534.286 232.246 529.808L232.246 524.772L258.009 524.772L256.958 529.808Z" fill="white"/>
                        <path id="Vector_44" d="M248.64 495.25L248.64 523.842C248.64 526.081 246.547 527.895 243.956 527.895C241.372 527.895 239.272 526.081 239.272 523.842L239.272 495.25C239.272 492.822 241.719 490.939 244.501 491.232C246.864 491.467 248.64 493.201 248.64 495.25Z" fill="#6F6E76"/>
                        </g>
                    </g>
                    <path id="Vector_45" d="M210 655.18C210 655.18 195.83 650.38 189 662.87C187.201 666.255 186.285 670.04 186.337 673.874C186.39 677.707 187.409 681.465 189.3 684.8C193.78 692.9 203.01 703.41 220.5 702.48C235.34 701.69 240.27 690.36 241.61 679.83C242.123 675.88 241.613 671.865 240.129 668.169C238.646 664.472 236.239 661.219 233.138 658.719C230.037 656.219 226.347 654.557 222.42 653.892C218.493 653.227 214.461 653.581 210.71 654.92L210 655.18Z" fill="#FC004C"/>
                    <path id="Vector_46" opacity="0.1" d="M192.34 685.92C190.449 682.585 189.43 678.827 189.377 674.994C189.325 671.16 190.241 667.375 192.04 663.99C198.86 651.5 213.04 656.3 213.04 656.3L213.77 656.04C219.172 654.085 225.11 654.217 230.42 656.41C227.487 654.66 224.201 653.584 220.801 653.259C217.401 652.934 213.972 653.368 210.76 654.53L210.03 654.79C210.03 654.79 195.86 649.99 189.03 662.48C187.231 665.865 186.315 669.65 186.367 673.484C186.42 677.317 187.439 681.075 189.33 684.41C192.33 689.74 197.33 696.11 205.33 699.58C199.836 696.295 195.345 691.572 192.34 685.92Z" fill="white"/>
                    <path id="Vector_47" opacity="0.2" d="M202.71 661.18C202.71 661.18 207.96 665.31 220.71 661.18Z" fill="black"/>
                    <path id="Vector_48" d="M201.58 631.16C201.58 631.16 210.58 655.56 209.84 661.94L216.97 661.19C216.97 661.19 204.97 639.8 207.97 631.19L201.58 631.16Z" fill="#7D4A0E"/>
                    <path id="Vector_49" d="M238.35 633.19C238.35 633.19 224.17 625.94 217.83 631.93C211.49 637.92 210.51 653.23 210.51 653.23C210.51 653.23 233.63 656.41 238.35 633.19Z" fill="#09A619"/>
                    <path id="Vector_50" d="M210.51 653.23C210.51 653.23 214.23 635.46 238.35 633.23" stroke="#0CC629" stroke-miterlimit="10"/>
                    <path id="Vector_51" d="M166.266 616.97C166.266 616.97 167.656 615.42 165.046 614.8V612.25H166.616C166.614 609.167 165.555 606.179 163.615 603.783C161.674 601.388 158.971 599.731 155.956 599.09V596H156.366V592H146.266V596H146.556V599.13C143.58 599.805 140.923 601.472 139.019 603.855C137.115 606.239 136.077 609.199 136.076 612.25H137.476V614.7C137.476 614.7 134.156 616.27 137.476 619.07C140.796 621.87 140.276 623.96 140.276 623.96C140.276 623.96 138.876 629.2 136.086 629.9V678.65C136.086 681.522 137.227 684.277 139.258 686.308C141.289 688.339 144.043 689.48 146.916 689.48H155.476C158.339 689.469 161.082 688.325 163.104 686.297C165.126 684.27 166.263 681.524 166.266 678.66V629.9C166.266 629.9 161.376 626.23 162.266 623.96C163.426 621.535 164.763 619.199 166.266 616.97V616.97Z" fill="#736CF1"/>
                        <g id="man">
                        <path id="Vector_52" d="M613.36 513.76C613.36 513.76 641.9 526.65 655.71 526.65C655.71 526.65 670.44 530.33 678.71 534.02C686.98 537.71 719.22 539.54 719.22 539.54C719.22 539.54 756.97 553.35 761.57 559.8C766.17 566.25 779.98 536.8 779.98 536.8L772.61 518.39L633.61 491.69L613.36 513.76Z" fill="#FFB9B9"/>
                        <path id="Vector_53" opacity="0.05" d="M613.36 513.76C613.36 513.76 641.9 526.65 655.71 526.65C655.71 526.65 670.44 530.33 678.71 534.02C686.98 537.71 719.22 539.54 719.22 539.54C719.22 539.54 756.97 553.35 761.57 559.8C766.17 566.25 779.98 536.8 779.98 536.8L772.61 518.39L633.61 491.69L613.36 513.76Z" fill="black"/>
                        <path id="Vector_54" d="M754.23 554.28C754.23 554.28 771.72 577.28 764.36 591.11C757 604.94 759.76 604.92 764.36 605.84C768.96 606.76 794.74 612.29 797.51 592.03C800.28 571.77 805.8 526.66 805.8 526.66L768 522.97C768 522.97 778.17 557.04 754.23 554.28Z" fill="#737A9D"/>
                        <path id="Vector_55" d="M536.94 483.38L616.12 520.21C616.12 520.21 640.98 500.87 639.12 490.75L547.05 468.65L536.94 483.38Z" fill="#4670C1"/>
                        <path id="Vector_56" opacity="0.1" d="M537 482.73L616.18 519.56C616.18 519.56 641.04 500.22 639.18 490.1L547.11 468L537 482.73Z" fill="black"/>
                        <path id="Vector_57" d="M869.32 531.26L861 551.51L841.7 556.09C836.292 551.577 830.508 547.535 824.41 544.01C814.02 538.01 800.35 532.14 787.41 533.07C787.41 533.07 735.85 524.78 733.09 521.07C733.09 521.07 699.94 513.7 692.58 514.62C689.03 515.06 681.4 512.51 674.46 509.74C667.01 506.74 660.35 503.57 660.35 503.57L684.29 465.82C687.082 467.022 689.956 468.024 692.89 468.82C702.04 471.5 718.51 474.98 742.3 474.98C780.97 474.98 834.37 514.57 834.37 514.57C834.37 514.57 834.9 514.75 835.81 515.02C839.81 516.23 851.21 519.08 856.47 514.57C862.87 509.16 869.32 531.26 869.32 531.26Z" fill="#FFB9B9"/>
                        <path id="Vector_58" opacity="0.1" d="M869.32 531.26L861 551.51L841.7 556.09C836.292 551.577 830.508 547.535 824.41 544.01C852.49 546.12 835.72 515.12 835.72 515.12H835.78C839.78 516.33 851.18 519.18 856.44 514.67C862.87 509.16 869.32 531.26 869.32 531.26Z" fill="black"/>
                        <path id="Vector_59" d="M824.52 544.79C824.52 544.79 846.79 576.02 837.42 593.61C828.05 611.2 831.56 611.19 837.42 612.37C843.28 613.55 876.11 620.58 879.62 594.79C882.32 574.96 879.95 536.9 878.71 520.38C878.631 519.337 878.345 518.321 877.869 517.389C877.394 516.458 876.738 515.63 875.939 514.955C875.141 514.279 874.216 513.769 873.219 513.454C872.222 513.139 871.172 513.026 870.13 513.12L837.56 516.12C837.56 516.12 855 548.31 824.52 544.79Z" fill="#737A9D"/>
                        <path id="Vector_60" d="M295.71 575.45L296.63 620.57L306.76 627.93H341.75L348.19 618.73V575.45L338.06 566.24H304.92L295.71 575.45Z" fill="#6F6E76"/>
                        <path id="Vector_61" opacity="0.2" d="M301.23 576.37C301.23 576.37 307.68 617.8 301.23 621.49L296.63 620.57L295.71 576.38L301.23 576.37Z" fill="white"/>
                        <path id="Vector_62" d="M376.73 572.69L384.1 565.32H419.1L426.47 572.69C426.47 572.69 435.68 599.39 428.31 616.88L420 625.17H385L376.71 617.8L376.73 572.69Z" fill="#6F6E76"/>
                        <path id="Vector_63" opacity="0.2" d="M385 574.53C385 574.53 392.37 606.76 385 617.8H376.71V572.69L385 574.53Z" fill="white"/>
                        <path id="Vector_64" d="M348.19 419.85C348.19 419.85 351.87 455.76 351.87 460.36C351.87 464.96 350.03 495.36 355.55 524.81C361.07 554.26 351.87 591.09 351.87 591.09H382.25L395.14 491.65L385.93 439.17L382.25 422.6L348.19 419.85Z" fill="#FFB9B9"/>
                        <path id="Vector_65" opacity="0.05" d="M348.19 419.85C348.19 419.85 351.87 455.76 351.87 460.36C351.87 464.96 350.03 495.36 355.55 524.81C361.07 554.26 351.87 591.09 351.87 591.09H382.25L395.14 491.65L385.93 439.17L382.25 422.6L348.19 419.85Z" fill="black"/>
                        <path id="Vector_66" d="M342.67 328.7C342.67 328.7 302.16 329.62 334.38 396.83C334.38 396.83 342.67 424.45 342.67 429.06C342.67 433.67 384.1 433.66 388.67 429.06C393.24 424.46 381.3 386.71 381.3 369.21C381.3 351.71 369.37 323.18 342.67 328.7Z" fill="#CBCDDA"/>
                        <path id="Vector_67" opacity="0.05" d="M342.67 328.7C342.67 328.7 302.16 329.62 334.38 396.83C334.38 396.83 342.67 424.45 342.67 429.06C342.67 433.67 384.1 433.66 388.67 429.06C393.24 424.46 381.3 386.71 381.3 369.21C381.3 351.71 369.37 323.18 342.67 328.7Z" fill="black"/>
                        <path id="Vector_68" d="M295.7 289.09C295.7 289.09 330.7 326.84 360.15 299.22L356.47 396.82C356.47 396.82 308.59 338.82 275.47 343.42L295.7 289.09Z" fill="#FFB9B9"/>
                        <path id="Vector_69" opacity="0.1" d="M692.85 468.93C691.45 479.72 687.05 502.44 674.42 509.8C666.97 506.8 660.31 503.63 660.31 503.63L684.25 465.88C687.041 467.099 689.915 468.118 692.85 468.93V468.93Z" fill="black"/>
                        <path id="Vector_70" d="M689.202 465.69C689.202 465.69 686.442 510.81 664.342 514.49L530.862 490.41C524.384 489.233 518.293 486.486 513.122 482.41C507.732 478.17 501.122 472.41 497.212 467.13C495.092 464.25 493.812 461.5 494.022 459.23C494.942 449.1 535.452 425.16 521.642 382.81C523.606 381.255 525.79 380.002 528.122 379.09C539.652 374.3 566.192 370.78 604.502 410.43C604.502 410.48 675.392 467.57 689.202 465.69Z" fill="#4670C1"/>
                        <path id="Vector_71" d="M329.78 579.13L330.7 624.25L340.82 631.62H375.81L382.26 622.41V579.13L372.13 569.93H338.98L329.78 579.13Z" fill="#6F6E76"/>
                        <path id="Vector_72" opacity="0.2" d="M335.3 580.09C335.3 580.09 341.75 621.52 335.3 625.21L330.7 624.29L329.78 580.09H335.3Z" fill="white"/>
                        <path id="Vector_73" d="M431.06 575.45L438.43 568.08H473.43L480.8 575.45C480.8 575.45 490.01 602.15 482.64 619.64L474.35 627.93H439.35L431.06 620.56V575.45Z" fill="#6F6E76"/>
                        <path id="Vector_74" opacity="0.2" d="M439.34 577.29C439.34 577.29 446.71 609.52 439.34 620.56H431.05V575.45L439.34 577.29Z" fill="white"/>
                        <path id="Vector_75" d="M382 592.95H431.81C435.71 592.95 438.87 596.45 438.87 600.78C438.87 605.1 435.71 608.61 431.81 608.61H382C377.77 608.61 374.49 604.52 375 599.87C375.41 595.92 378.43 592.95 382 592.95Z" fill="#6F6E76"/>
                        <path id="Vector_76" opacity="0.1" d="M525.89 449.31C516.04 456.21 505.66 460.73 498.7 464.58C496.58 461.7 495.3 458.95 495.51 456.68C496.43 446.55 536.94 422.61 523.13 380.26C525.093 378.705 527.277 377.452 529.61 376.54C531.773 376.494 533.924 376.199 536.02 375.66C536.02 375.66 544.3 436.42 525.89 449.31Z" fill="black"/>
                        <path id="Vector_77" d="M319.19 360.46C319.19 360.46 333 374.27 346.35 383.02C358.67 391.09 336.68 309.82 336.68 309.82C336.68 309.82 350.32 298.82 358.33 292.29C363.679 287.889 370.495 285.674 377.41 286.09C395.84 287.28 429.6 295.03 456.84 332.39C496.43 386.71 532.34 375.66 532.34 375.66C532.34 375.66 540.63 436.43 522.21 449.32C503.79 462.21 483.54 466.81 487.21 474.18C490.88 481.55 470.64 438.27 424.6 430.91C378.56 423.55 327.92 391.32 328.85 375.67C328.86 375.66 315.51 365.09 319.19 360.46Z" fill="#CBCDDA"/>
                        <path id="Vector_78" opacity="0.1" d="M309.52 313.09C309.515 310.428 309.281 307.772 308.82 305.15C296.76 299.15 298.47 290.99 298.47 290.99L278.21 345.31C285.62 344.31 293.77 346.39 301.95 350.31C312.72 341.8 309.52 327.78 309.52 313.09Z" fill="black"/>
                        <path id="Vector_79" d="M270.84 358.17C296.267 358.17 316.88 337.557 316.88 312.13C316.88 286.703 296.267 266.09 270.84 266.09C245.413 266.09 224.8 286.703 224.8 312.13C224.8 337.557 245.413 358.17 270.84 358.17Z" fill="#FFB9B9"/>
                        <path id="Vector_80" opacity="0.1" d="M227.18 322.51C226.33 325.24 225.02 328.05 222.55 329.51C219.55 331.29 215.41 330.41 212.74 328.11C210.07 325.81 208.63 322.37 207.88 318.93C206.8 313.949 206.972 308.778 208.38 303.88C209.58 299.73 211.65 295.88 212.52 291.63C213.45 287.11 212.98 282.38 214.02 277.88C215.43 271.78 219.45 266.67 223.37 261.78C224.598 259.913 226.191 258.314 228.052 257.077C229.912 255.84 232.004 254.99 234.2 254.58L253.47 248.77C257.123 247.546 260.878 246.65 264.69 246.09C269.591 245.588 274.542 246.023 279.28 247.37C283.053 248.319 286.633 249.916 289.86 252.09C293.057 254.465 295.873 257.315 298.21 260.54C308.4 273.86 314.21 295.65 324.72 308.76C320.57 310.04 316.42 305.76 312.27 307.06C311.68 307.314 311.023 307.367 310.4 307.21C309.783 306.875 309.299 306.338 309.03 305.69C305.373 299.301 299.617 294.376 292.74 291.75C287.64 289.82 280.74 289.83 277.95 294.51C276.06 297.67 276.82 301.66 277.32 305.31C277.82 308.96 277.73 313.31 274.84 315.56C273.243 316.639 271.384 317.268 269.46 317.38C260.491 318.556 251.371 317.663 242.8 314.77C239.8 313.77 236.75 310.64 233.58 311.64C229.3 312.99 228.31 318.88 227.18 322.51Z" fill="black"/>
                        <path id="Vector_81" d="M228 321.5C227.15 324.23 225.84 327.04 223.37 328.5C220.37 330.28 216.23 329.4 213.56 327.1C210.89 324.8 209.45 321.36 208.7 317.92C207.62 312.939 207.792 307.768 209.2 302.87C210.4 298.72 212.47 294.87 213.34 290.62C214.27 286.1 213.8 281.37 214.84 276.87C216.25 270.77 220.27 265.66 224.19 260.77C225.419 258.903 227.011 257.304 228.872 256.067C230.733 254.83 232.824 253.98 235.02 253.57L254.29 247.76C257.944 246.54 261.699 245.646 265.51 245.09C270.411 244.588 275.362 245.023 280.1 246.37C283.874 247.319 287.453 248.916 290.68 251.09C293.877 253.465 296.693 256.315 299.03 259.54C309.22 272.86 315.03 294.65 325.54 307.76C321.39 309.04 317.24 304.76 313.09 306.06C312.5 306.314 311.843 306.367 311.22 306.21C310.596 305.879 310.105 305.342 309.83 304.69C306.173 298.301 300.417 293.376 293.54 290.75C288.44 288.82 281.54 288.83 278.75 293.51C276.86 296.67 277.62 300.66 278.12 304.31C278.62 307.96 278.53 312.31 275.64 314.56C274.043 315.639 272.185 316.268 270.26 316.38C261.291 317.556 252.171 316.663 243.6 313.77C240.6 312.77 237.55 309.64 234.38 310.64C230.12 311.98 229.13 317.87 228 321.5Z" fill="#B96B6B"/>
                            <g id="Group_3" opacity="0.1">
                            <path id="Vector_82" opacity="0.1" d="M339.8 307.31L336.68 309.83C336.68 309.83 349.57 357.46 350.08 376.17C356.66 374.39 344 323.43 339.8 307.31Z" fill="black"/>
                            <path id="Vector_83" opacity="0.1" d="M524 441.95C505.59 454.84 485.33 459.44 489 466.81C492.67 474.18 472.43 430.9 426.39 423.54C383.2 416.63 335.96 387.84 331.04 371.38C324.14 365.48 319.12 360.47 319.12 360.47C315.44 365.07 328.79 375.66 328.79 375.66C327.87 391.31 378.51 423.54 424.54 430.9C470.57 438.26 490.83 481.54 487.15 474.17C483.47 466.8 503.72 462.17 522.15 449.31C527.42 445.62 530.5 438.01 532.22 429.02C530.44 434.71 527.8 439.32 524 441.95Z" fill="black"/>
                            </g>
                        <path id="Vector_84" d="M431.06 530.34C428.3 534.02 426.46 571.77 426.46 571.77C426.46 571.77 437.46 626.09 403.46 620.57C369.46 615.05 398.86 576.38 398.86 576.38L394.26 522.98C376.77 476.98 380.45 443.8 380.45 443.8L377.18 413.73L375.84 401.45L415.43 392.24C414.35 393.68 414.81 402.66 415.78 413.09C417.29 429.43 420.03 449.32 420.03 449.32C428.29 458.52 433.82 526.65 431.06 530.34Z" fill="#FFB9B9"/>
                        <path id="Vector_85" opacity="0.1" d="M374.89 309.37C374.89 309.37 334.38 310.29 366.6 377.5C366.6 377.5 374.89 405.12 374.89 409.73C374.89 414.34 416.32 414.33 420.89 409.73C425.46 405.13 413.52 367.38 413.52 349.88C413.52 332.38 401.59 303.84 374.89 309.37Z" fill="black"/>
                        <path id="Vector_86" opacity="0.1" d="M415.75 413.09C407.15 415.44 386.07 415.65 377.14 413.73L375.8 401.45L415.39 392.24C414.33 393.67 414.79 402.65 415.75 413.09Z" fill="black"/>
                        <path id="Vector_87" d="M374.88 309.37C374.88 309.37 334.37 310.29 366.59 377.5C366.59 377.5 374.88 405.12 374.88 409.73C374.88 414.34 416.31 414.33 420.88 409.73C425.45 405.13 413.51 367.38 413.51 349.88C413.51 332.38 401.58 303.84 374.88 309.37Z" fill="#CBCDDA"/>
                        </g>
                    </g>
                </svg> -->
            </div>
        </div>
    </body>
</html>