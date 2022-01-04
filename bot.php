<?php

system('clear');
//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =  "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$reset="\033[0m";
$Black="\033[0;30m";
$Red= "\033[0;31m";
$Green="\033[0;32m";
$Yellow="\033[0;33m";
$Blue="\033[0;34m";
$Purple="\033[0;35m";
$Cyan="\033[0;36m";
$White="\033[0;37m";
$IYellow="\033[0;93m";
$IRed="\033[0;91m";
$BIRed="\033[1;91m";
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";
$BIBlue="\033[1;94m";
$BICyan="\033[1;96m";
$BIBlack="\033[1;90m";
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";
$On_White="\033[47m";
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";
$On_Blue="\033[44m";
$On_Green="\033[42m";
$IGreen="\033[0;92m";

//red to yellow shade ↓

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";

include("data.php");
include("bst1.php");
include("bst2.php");
include("bst3.php");
include("bst4.php");

//Password

function typer($w,$t){
  foreach(str_split($w) as $i){
echo $i;
usleep($t);

}
}
/** **********************************************************************************
 * Generate hundreds of thousands of unique mobile & desktop User Agents that are 100% authentic.
 * Supports Hundreds of Android devices, 32 & 64 bit versions of Windows XP-10.5, Linux 540-686, and Mac 7-10.12
 * as well as browsers Firefox, Chrome, and Internet Explorer.
 */
class userAgent {
    /**
     * Windows Operating System list with dynamic versioning
     * @var array $windows_os
     */
    public $windows_os = [ '[Windows; |Windows; U; |]Windows NT 6.:number0-3:;[ Win64; x64| WOW64| x64|]',
                           '[Windows; |Windows; U; |]Windows NT 10.:number0-5:;[ Win64; x64| WOW64| x64|]', ];
    /**
     * Linux Operating Systems [limited]
     * @var array $linux_os
     */
    public $linux_os = [ '[Linux; |][U; |]Linux x86_64',
                         '[Linux; |][U; |]Linux i:number5-6::number4-8::number0-6: [x86_64|]' ];
    /**
     * Mac Operating System (OS X) with dynamic versioning
     * @var array $mac_os
     */
    public $mac_os = [ 'Macintosh; [U; |]Intel Mac OS X :number7-9:_:number0-9:_:number0-9:',
                       'Macintosh; [U; |]Intel Mac OS X 10_:number0-12:_:number0-9:' ];
    /**
     * Versions of Android to be used
     * @var array $androidVersions
     */
    public $androidVersions = [ '4.3.1',
                                '4.4',
                                '4.4.1',
                                '4.4.4',
                                '5.0',
                                '5.0.1',
                                '5.0.2',
                                '5.1',
                                '5.1.1',
                                '6.0',
                                '6.0.1',
                                '7.0',
                                '7.1',
                                '7.1.1' ];
    /**
     * Holds the version of android for the User Agent being generated
     * @property string $androidVersion
     */
    public $androidVersion;
    /**
     * Android devices and for specific android versions
     * @var array $androidDevices
     */
    public $androidDevices = [ '4.3' => [ 'GT-I9:number2-5:00 Build/JDQ39',
                                          'Nokia 3:number1-3:[10|15] Build/IMM76D',
                                          '[SAMSUNG |]SM-G3:number1-5:0[R5|I|V|A|T|S] Build/JLS36C',
                                          'Ascend G3:number0-3:0 Build/JLS36I',
                                          '[SAMSUNG |]SM-G3:number3-6::number1-8::number0-9:[V|A|T|S|I|R5] Build/JLS36C',
                                          'HUAWEI G6-L:number10-11: Build/HuaweiG6-L:number10-11:',
                                          '[SAMSUNG |]SM-[G|N]:number7-9:1:number0-8:[S|A|V|T] Build/[JLS36C|JSS15J]',
                                          '[SAMSUNG |]SGH-N0:number6-9:5[T|V|A|S] Build/JSS15J',
                                          'Samsung Galaxy S[4|IV] Mega GT-I:number89-95:00 Build/JDQ39',
                                          'SAMSUNG SM-T:number24-28:5[s|a|t|v] Build/[JLS36C|JSS15J]',
                                          'HP :number63-73:5 Notebook PC Build/[JLS36C|JSS15J]',
                                          'HP Compaq 2:number1-3:10b Build/[JLS36C|JSS15J]',
                                          'HTC One 801[s|e] Build/[JLS36C|JSS15J]',
                                          'HTC One max Build/[JLS36C|JSS15J]',
                                          'HTC Xplorer A:number28-34:0[e|s] Build/GRJ90', ],
                               '4.4' => [ 'XT10:number5-8:0 Build/SU6-7.3',
                                          'XT10:number12-52: Build/[KXB20.9|KXC21.5]',
                                          'Nokia :number30-34:10 Build/IMM76D',
                                          'E:number:20-23::number0-3::number0-4: Build/24.0.[A|B].1.34',
                                          '[SAMSUNG |]SM-E500[F|L] Build/KTU84P',
                                          'LG Optimus G Build/KRT16M',
                                          'LG-E98:number7-9: Build/KOT49I',
                                          'Elephone P:number2-6:000 Build/KTU84P',
                                          'IQ450:number0-4: Quad Build/KOT49H',
                                          'LG-F:number2-5:00[K|S|L] Build/KOT49[I|H]',
                                          'LG-V:number3-7::number0-1:0 Build/KOT49I',
                                          '[SAMSUNG |]SM-J:number1-2::number0-1:0[G|F] Build/KTU84P',
                                          '[SAMSUNG |]SM-N80:number0-1:0 Build/[KVT49L|JZO54K]',
                                          '[SAMSUNG |]SM-N900:number5-8: Build/KOT49H',
                                          '[SAMSUNG-|]SGH-I337[|M] Build/[JSS15J|KOT49H]',
                                          '[SAMSUNG |]SM-G900[W8|9D|FD|H|V|FG|A|T] Build/KOT49H',
                                          '[SAMSUNG |]SM-T5:number30-35: Build/[KOT49H|KTU84P]',
                                          '[Google |]Nexus :number5-7: Build/KOT49H',
                                          'LG-H2:number0-2:0 Build/KOT49[I|H]',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/[KOT49H|KTU84L]',
                                          '[SAMSUNG |]GT-I9:number3-5:0:number0-6:[V|I|T|N] Build/KOT49H',
                                          'Lenovo P7:number7-8::number1-6: Build/[Lenovo|JRO03C]',
                                          'LG-D95:number1-8: Build/KOT49[I|H]',
                                          'LG-D:number1-8::number0-8:0 Build/KOT49[I|H]',
                                          'Nexus5 V:number6-7:.1 Build/KOT49H',
                                          'Nexus[_|] :number4-10: Build/[KOT49H|KTU84P]',
                                          'Nexus[_S_| S ][4G |]Build/GRJ22',
                                          '[HM NOTE|NOTE-III|NOTE2 1LTE[TD|W|T]',
                                          'ALCATEL ONE[| ]TOUCH 70:number2-4::number0-9:[X|D|E|A] Build/KOT49H',
                                          'MOTOROLA [MOTOG|MSM8960|RAZR] Build/KVT49L' ],
                               '5.0' => [ 'Nokia :number10-11:00 [wifi|4G|LTE] Build/GRK39F',
                                          'HTC 80:number1-2[s|w|e|t] Build/[LRX22G|JSS15J]',
                                          'Lenovo A7000-a Build/LRX21M;',
                                          'HTC Butterfly S [901|919][s|d|] Build/LRX22G',
                                          'HTC [M8|M9|M8 Pro Build/LRX22G',
                                          'LG-D3:number25-37: Build/LRX22G',
                                          'LG-D72:number0-9: Build/LRX22G',
                                          '[SAMSUNG |]SM-G4:number0-9:0 Build/LRX22[G|C]',
                                          '[|SAMSUNG ]SM-G9[00|25|20][FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX21T|KTU84F|KOT49H]',
                                          '[SAMSUNG |]SM-A:number7-8:00[F|I|T|H|] Build/[LRX22G|LMY47X]',
                                          '[SAMSUNG-|]SM-N91[0|5][A|V|F|G|FY] Build/LRX22C',
                                          '[SAMSUNG |]SM-[T|P][350|550|555|355|805|800|710|810|815] Build/LRX22G',
                                          'LG-D7:number0-2::number0-9: Build/LRX22G',
                                          '[LG|SM]-[D|G]:number8-9::number0-5::number0-9:[|P|K|T|I|F|T1] Build/[LRX22G|KOT49I|KVT49L|LMY47X]' ],
                               '5.1' => [ 'Nexus :number5-9: Build/[LMY48B|LRX22C]',
                                          '[|SAMSUNG ]SM-G9[28|25|20][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX22G|LMY47X]',
                                          '[|SAMSUNG ]SM-G9[35|350][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[MMB29M|LMY47X]',
                                          '[MOTOROLA |][MOTO G|MOTO G XT1068|XT1021|MOTO E XT1021|MOTO XT1580|MOTO X FORCE XT1580|MOTO X PLAY XT1562|MOTO XT1562|MOTO XT1575|MOTO X PURE XT1575|MOTO XT1570 MOTO X STYLE] Build/[LXB22|LMY47Z|LPC23|LPK23|LPD23|LPH223]' ],
                               '6.0' => [ '[SAMSUNG |]SM-[G|D][920|925|928|9350][V|F|I|L|M|S|8|I] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'Nexus :number5-7:[P|X|] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'HTC One[_| ][M9|M8|M8 Pro] Build/MRA58K',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/MRA58K' ],
                               '7.0' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ],
                               '7.1' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ] ];
    /**
     * List of "OS" strings used for android
     * @var array $android_os
     */
    public $android_os = [ 'Linux; Android :androidVersion:; :androidDevice:',
                           //TODO: Add a $windowsDevices variable that does the same as androidDevice
                           //'Windows Phone 10.0; Android :androidVersion:; :windowsDevice:',
                           'Linux; U; Android :androidVersion:; :androidDevice:',
                           'Android; Android :androidVersion:; :androidDevice:', ];
    /**
     * List of "OS" strings used for iOS
     * @var array $mobile_ios
     */
    public $mobile_ios = [ 'iphone' => 'iPhone; CPU iPhone OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;',
                           'ipad' => 'iPad; CPU iPad OS :number7-11:_:number0-9:_:number0-9: like Mac OS X;',
                           'ipod' => 'iPod; CPU iPod OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;', ];

    /**
     * Get a random operating system
     * @param null|string $os
     * @return string *
     */
    public function getOS($os = NULL) {
        $_os = [];
        if($os === NULL || in_array($os, [ 'chrome', 'firefox', 'explorer' ])) {
            $_os = $os === 'explorer' ? $this->windows_os : array_merge($this->windows_os, $this->linux_os, $this->mac_os);
        } else {
            $_os += $this->{$os . '_os'};
        }
        // randomly select on operating system
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');

        // check for spin syntax
        if(strpos($selected_os, '[') !== FALSE) {
            $selected_os = self::processSpinSyntax($selected_os);
        }

        // check for random number syntax
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }

        if(random_int(1, 100) > 50) {
            $selected_os .= '; en-US';
        }
        return $selected_os;
    }

    /**
     * Get Mobile OS
     * @param null|string $os Can specifiy android, iphone, ipad, ipod, or null/blank for random
     * @return string *
     */
    public function getMobileOS($os = NULL) {
        $os = strtolower($os);
        $_os = [];
        switch( $os ) {
            case'android':
                $_os += $this->android_os;
            break;
            case 'iphone':
            case 'ipad':
            case 'ipod':
                $_os[] = $this->mobile_ios[$os];
            break;
            default:
                $_os = array_merge($this->android_os, array_values($this->mobile_ios));
        }
        // select random mobile os
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
        if(strpos($selected_os, ':androidVersion:') !== FALSE) {
            $selected_os = $this->processAndroidVersion($selected_os);
        }
        if(strpos($selected_os, ':androidDevice:') !== FALSE) {
            $selected_os = $this->addAndroidDevice($selected_os);
        }
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }
        return $selected_os;
    }

    /**
     *  static::processRandomNumbers
     * @param $selected_os
     * @return null|string|string[] *
     */
    public static function processRandomNumbers($selected_os) {
        return preg_replace_callback('/:number(\d+)-(\d+):/i', function($matches) { return random_int($matches[1], $matches[2]); }, $selected_os);
    }

    /**
     *  static::processSpinSyntax
     * @param $selected_os
     * @return null|string|string[] *
     */
    public static function processSpinSyntax($selected_os) {
        return preg_replace_callback('/\[([\w\-\s|;]*?)\]/i', function($matches) {
            $shuffle = explode('|', $matches[1]);
            return $shuffle[array_rand($shuffle)];
        }, $selected_os);
    }

    /**
     * processAndroidVersion
     * @param $selected_os
     * @return null|string|string[] *
     */
    public function processAndroidVersion($selected_os) {
        $this->androidVersion = $version = $this->androidVersions[array_rand($this->androidVersions)];
        return preg_replace_callback('/:androidVersion:/i', function($matches) use ($version) { return $version; }, $selected_os);
    }

    /**
     * addAndroidDevice
     * @param $selected_os
     * @return null|string|string[] *
     */
    public function addAndroidDevice($selected_os) {
        $devices = $this->androidDevices[substr($this->androidVersion, 0, 3)];
        $device  = $devices[array_rand($devices)];

        $device = self::processSpinSyntax($device);
        return preg_replace_callback('/:androidDevice:/i', function($matches) use ($device) { return $device; }, $selected_os);
    }

    /**
     *  static::chromeVersion
     * @param $version
     * @return string *
     */
    public static function chromeVersion($version) {
        return random_int($version['min'], $version['max']) . '.0.' . random_int(1000, 4000) . '.' . random_int(100, 400);
    }

    /**
     *  static::firefoxVersion
     * @param $version
     * @return string *
     */
    public static function firefoxVersion($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }

    /**
     *  static::windows
     * @param $version
     * @return string *
     */
    public static function windows($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }

    /**
     * generate
     * @param null $userAgent
     * @return string *
     */
    public function generate($userAgent = NULL) {
        if($userAgent === NULL) {
            $r = random_int(0, 100);
            if($r >= 44) {
                $userAgent = array_rand([ 'firefox' => 1, 'chrome' => 1, 'explorer' => 1 ]);
            } else {
                $userAgent = array_rand([ 'iphone' => 1, 'android' => 1, 'mobile' => 1 ]);
            }
        } elseif($userAgent == 'windows' || $userAgent == 'mac' || $userAgent == 'linux') {
            $agents = [ 'firefox' => 1, 'chrome' => 1 ];
            if($userAgent == 'windows') {
                $agents['explorer'] = 1;
            }
            $userAgent = array_rand($agents);
        }
        $_SESSION['agent'] = $userAgent;
        if($userAgent == 'chrome') {
            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko) Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                              'max' => 55 ]) . ' Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603));
        } elseif($userAgent == 'firefox') {

            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') Gecko/' . (random_int(1, 100) > 30 ? '20100101' : '20130401') . ' Firefox/' . self::firefoxVersion([ 'min' => 45,
                                                                                                                                                                        'max' => 74 ]);
        } elseif($userAgent == 'explorer') {

            return 'Mozilla / 5.0 (compatible; MSIE ' . ($int = random_int(7, 11)) . '.0; ' . $this->getOS('windows') . ' Trident / ' . ($int == 7 || $int == 8 ? '4' : ($int == 9 ? '5' : ($int == 10 ? '6' : '7'))) . '.0)';
        } elseif($userAgent == 'mobile' || $userAgent == 'android' || $userAgent == 'iphone' || $userAgent == 'ipad' || $userAgent == 'ipod') {

            return 'Mozilla/5.0 (' . $this->getMobileOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko)  Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                                     'max' => 55 ]) . ' Mobile Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(0, 9);
        } else {
            new Exception('Unable to determine user agent to generate');
        }
    }
}


$agent=new userAgent();
$ua=$agent->generate('mobile');

function pisit($url, $header){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 11; vivo 1904) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");


echo$putih2. " Please wait";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n";
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$ipa =  array(
"User-agent: ".$useragent);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ipsaya.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ipa);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$ip = curl_exec($ch);
$je = explode("<b>Nama Organisasi :</b><br>", $ip);
$nis = explode("<br><b>ISP :</b><br>", $je[1]);
$jenis = "$nis[0]";
$ko = explode("<br><b>Kota :</b><br>", $ip);
$ta = explode("<br><b>Negara", $ko[1]);
$kota = "$ta[0]";
$ne = explode("<br><b>Kode Negara :</b><br>", $ip);
$ga = explode("<br>", $ne[1]);
$negara = "$ga[0]";
$i = explode('<input type="hidden" name="lihatip" id="lihatip"  value="', $ip);
$p = explode('">', $i[1]);
$mas = "$p[0]";
echo $yellow2."\n[+]================================================================[+]";
echo $red2."\n>>>\033[1;37m IP ANDA : ".$green2.$mas;
echo $red2."\n>>>\033[1;37m KOTA    : ".$green2.$kota;
echo $red2."\n>>>\033[1;37m NEGARA  : ".$green2.$negara;
echo $red2."\n>>>\033[1;37m JENIS   : ".$green2.$jenis;
echo $yellow2."\n[+]================================================================[+]\n\n";
sleep(1);
echo "$putih2 All your data is connected to $kuning2 AwX-Ploit server \n";
sleep(2);
system('clear');
echo$red2.">$green2 Welcome\n\n".$reset;
sleep(1);

// MENU
while(true){
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>$putih2 Script :$ungu2 BrutalClaim$kuning2 AutoFaucet Multi Coin Instant Withdraw to :
$red2>$putih2 Host   :$green2 4                                           $green2>\33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n\n";

echo "                          \e[1;35m<<<\033[1;31m[\033[1;32m+\033[1;31m]$kuning2 MENU \033[1;31m[\033[1;32m+\033[1;31m]\e[1;35m>>>\n\n";
echo "\33[37;1m[\033[1;32m0\33[37;1m]$red2 >>>$kuning2 Script Info\n\n";
echo "\33[37;1m[\033[1;32m1\33[37;1m]$red2 >>>$kuning2 Input Data / Set Data\n\n";
echo "\33[37;1m[\033[1;32m2\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 auto.multiclaim.net$red2 ]\n";
echo "\33[37;1m[\033[1;32m3\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 bestautofaucet.com$red2 ]\n";
echo "\33[37;1m[\033[1;32m4\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 proinfinity.fun$red2 ]\n";
echo "\33[37;1m[\033[1;32m5\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 phoenixfaucets.xyz$red2 ]\n\n";
echo "\33[37;1m[\033[1;32m6\33[37;1m]$red2 >>>$kuning2 Single Coin - SHIBA INU Only$red2 >$lblue2 proinfinity.fun$red2 [$green2 New$red2 ] \n\n";
echo "\33[37;1m[\033[1;32m7\33[37;1m]$red2 >>>$kuning2 Join WhatsApp Group | Forum Diskusi\n";
echo "\33[37;1m[\033[1;32m8\33[37;1m]$red2 >>>$kuning2 Contact AwX-Ploit (Creator)\n\n";
echo$red2. " ◼$green2 Choose$putih2 :$green2 ";
$menu = trim(fgets(STDIN));



// MENU 0 WEBSITE LIST
if($menu== 0){
system('clear');
sleep(1);
echo "                       \e[1;35m<<<\033[1;31m[\033[1;32m+\033[1;31m]$kuning2 SCRIPT INFO \033[1;31m[\033[1;32m+\033[1;31m]\e[1;35m>>>\n\n";
sleep(1);
echo$green2. "◼$kuning2 Apa Yang Baru di v2.9 ? \n";
echo$red2. ">$green2 Bug Fixed\n";
echo$red2. ">$green2 SingleCoin - SHIBA INU Only\n\n";

echo$green2. "◼$kuning2 Tentang BrutalClaim\n";
echo$red2. ">$putih2 Script$ungu2 MultiClaim$putih2 Telah Berevolusi Menjadi Script$ungu2 BrutalClaim$putih2 Sejak 25-November-2021\n\n";

echo$green2. "◼$kuning2 4 Host Dalam Satu Script\n";
echo$red2. ">$putih2 Anda Harus Daftar Terlebih Dahulu & Mengumpulkan Token Di Setiap Website Nya, Dan Untuk Menjalankan Beberapa Host Anda Bisa Menjalankan Nya Di New Session Di Setiap Host Nya, Atau Bisa Menggunakan Fitur Perintah$green2 Tmux$red2 ($yellow2 Untuk Menjalankan Beberapa Tab Di Satu Session$red2 )\n\n\n";
echo$putih2. $enter = "[!] [Pending Process (Press Enter) - To Back]";
$enter = trim(fgets(STDIN));
}



// MENU 1 INPUT DATA
if($menu == 1){
system('clear');
sleep(1);
echo "               $ungu2  <<<\033[1;31m[\033[1;32m+\033[1;31m]$kuning2  INPUT DATA / SET DATA  \033[1;31m[\033[1;32m+\033[1;31m]\e[1;35m>>>\n\n";
sleep(1);
echo "\n\033[1;31m[\033[1;37m+\033[1;31m]$green2 User-Agent$kuning2 :$putih2 ";
$useragent = trim(fgets(STDIN));
echo "\n\033[1;31m[\033[1;37m+\033[1;31m]$green2 Username$kuning2   :$putih2 ";
$user = trim(fgets(STDIN));
echo "\n\033[1;31m[\033[1;37m+\033[1;31m]$green2 ExpressCrypto ID$kuning2   :$putih2 ";
$ecID = trim(fgets(STDIN));

if(file_exists("data.php")){

$save = fopen("data.php", "w");
  fwrite($save, "
");
  fwrite($save,'$useragent = "'.$useragent.'";
');

  fwrite($save,'$user = "'.$user.'";
');

  fwrite($save,'$ecID = "'.$ecID.'";
');
fclose($save);

}else{
  $save = fopen("data.php", "w");
  fwrite($save, "
");
  fwrite($save,'$useragent = "'.$useragent.'";
');

  fwrite($save,'$user = "'.$user.'";
');

  fwrite($save,'$ecID = "'.$ecID.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
}





// MENU 2 RUN AUTO.MULTICLAIM.NET
if($menu== 2){
sleep(1);
echo "\n\n\n\033[1;31m[\033[1;37m+\033[1;31m]$yellow2 Boosts -?X- $red2($green2 auto.multiclaim.net$red2 )$kuning2 :$putih2 ";
$bost1 = trim(fgets(STDIN));

if(file_exists("bst1.php")){
$save = fopen("bst1.php", "w");
  fwrite($save, "
");

fwrite($save,'$bost1 = "'.$bost1.'";
');
fclose($save);
}else{
  $save = fopen("bst1.php", "w");
  fwrite($save, "
");

  fwrite($save,'$bost1 = "'.$bost1.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>>>$putih2 Host        :$green2 auto.multiclaim.net
$red2>>>$putih2 Script Type :$ungu2 AutoFaucet$r2 Instant Withdraw to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n";
//Menerima Data
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[%22SHIB%22%2C%22BCN%22%2C%22RDD%22%2C%22BTT%22%2C%22DGB%22%2C%22TRX%22%2C%22RVN%22%2C%22DOGE%22%2C%22VTC%22%2C%22PIVX%22%2C%22KMD%22%2C%22USDT%22%2C%22PPC%22%2C%22XRP%22%2C%22ADA%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%22$bost1%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://auto.multiclaim.net/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
sleep(1);
echo$red2. "◼$kuning2 Welcome ";
sleep(1);
echo $red2."[".$green2.$user.$red2."]"."\n";
sleep(1);
echo$green2."◼$putih2 $ecID\n\n";
echo$red2. ">$lblue2 Token$putih2  :$kuning2 $token"."\n";
echo$red2. ">$lblue2 Boosts$putih2 :";echo$kuning2." $bost1"."X ";echo $red2."($putih2 Claim every 60s$red2)\n";
echo$r2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
echo $red2.">>> \033[1;32mRunning";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n\n";
// START
while(true){
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://auto.multiclaim.net/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
if($token == ""){
echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
sleep(1);
exit;
}else{
if($token == "0"){
sleep(1);
echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
sleep(2);
echo"\n";
echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
sleep(1);
echo$putih2."Please wait ";
sleep(1);
echo$red2."•";
sleep(1);
echo$kuning2."•";
sleep(1);
echo$green2."•";
sleep(1);
system("xdg-open https://auto.multiclaim.net/sl");
sleep(1);
exit;
}else{
echo $reset;



$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://auto.multiclaim.net/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
echo"\n,";
for ($i=60;$i>-1;$i--){
echo "\r                                                                    \r";
date_default_timezone_set('Asia/Jakarta');
echo $red2."[ "; echo$green2."START";echo"$red2 | ";echo$lblue2. date('H:i:s');echo"$red2 ]";
echo $yellow2." Please Wait ";echo$green2."... ";echo$ungu2."( ";echo$putih2."$i";echo$putih2."s";echo$ungu2." )";
sleep(1);
echo "\r                                                                     \r";
}



$header = array(
"user-agent:".$useragent,
"referer: https://auto.multiclaim.net/session/autofaucet",
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Post
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://auto.multiclaim.net/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
$data = "";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $cek = curl_exec($ch);
$r1 = explode('Successfully sent',$cek);
if(isset($r1[1])){
  $r1 = explode('to',$r1[1])[0];
}
$r2 = explode('Successfully sent',$cek);
if(isset($r2[2])){
  $r2 = explode('to',$r2[2])[0];
}
$r3 = explode('Successfully sent',$cek);
if(isset($r3[3])){
  $r3 = explode('to',$r3[3])[0];
}
$r4 = explode('Successfully sent',$cek);
if(isset($r4[4])){
  $r4 = explode('to',$r4[4])[0];
}
$r5 = explode('Successfully sent',$cek);
if(isset($r5[5])){
  $r5 = explode('to',$r5[5])[0];
}
$r6 = explode('Successfully sent',$cek);
if(isset($r6[6])){
  $r6 = explode('to',$r6[6])[0];
}
$r7 = explode('Successfully sent',$cek);
if(isset($r7[7])){
  $r7 = explode('to',$r7[7])[0];
}
$r8 = explode('Successfully sent',$cek);
if(isset($r8[8])){
  $r8 = explode('to',$r8[8])[0];
}
$r9 = explode('Successfully sent',$cek);
if(isset($r9[9])){
  $r9 = explode('to',$r9[9])[0];
}
$r10 = explode('Successfully sent',$cek);
if(isset($r10[10])){
  $r10 = explode('to',$r10[10])[0];
}
$r11 = explode('Successfully sent',$cek);
if(isset($r11[11])){
  $r11 = explode('to',$r11[11])[0];
}
$r12 = explode('Successfully sent',$cek);
if(isset($r12[12])){
  $r12 = explode('to',$r12[12])[0];
}
$r13 = explode('Successfully sent',$cek);
if(isset($r13[13])){
  $r13 = explode('to',$r13[13])[0];
}
$r14 = explode('Successfully sent',$cek);
if(isset($r14[14])){
  $r14 = explode('to',$r14[14])[0];
}
$r15 = explode('Successfully sent',$cek);
if(isset($r15[15])){
  $r15 = explode('to',$r15[15])[0];
}
date_default_timezone_set('Asia/Jakarta');
echo$ungu2."════════════════════";echo $red2."[ "; echo$lblue2. date('d-F-Y').$reset;echo"$red2 | ";echo$kuning2. date('H:i:s');echo$red2." ]";echo$ungu2."═══════════════════\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r1\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r2\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ms\033[1;31m]$kuning2$r3\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mm\033[1;31m]$kuning2$r4\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37me\033[1;31m]$kuning2$r5\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;31m•\033[1;31m]$kuning2$r6\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mA\033[1;31m]$kuning2$r7\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mw\033[1;31m]$kuning2$r8\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mX\033[1;31m]$kuning2$r9\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37m-\033[1;31m]$kuning2$r10\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mP\033[1;31m]$kuning2$r11\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ml\033[1;31m]$kuning2$r12\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mo\033[1;31m]$kuning2$r13\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r14\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r15\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$blue2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
}}}
}







// MENU 3 RUN BESTAUTOFAUCET.COM
if($menu== 3){
sleep(1);
echo "\n\n\n\033[1;31m[\033[1;37m+\033[1;31m]$yellow2 Boosts -?X- $red2($green2 bestautofaucet.com$red2 )$kuning2 :$putih2 ";
$bost2 = trim(fgets(STDIN));

if(file_exists("bst2.php")){
$save = fopen("bst2.php", "w");
  fwrite($save, "
");

fwrite($save,'$bost2 = "'.$bost2.'";
');
fclose($save);
}else{
  $save = fopen("bst2.php", "w");
  fwrite($save, "
");

  fwrite($save,'$bost2 = "'.$bost2.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>>>$putih2 Host        :$green2 bestautofaucet.com
$red2>>>$putih2 Script Type :$ungu2 AutoFaucet$r2 Instant Withdraw to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n";
//Menerima Data

$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://bestautofaucet.com/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Coins: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
sleep(1);
echo$red2. "◼$kuning2 Welcome ";
sleep(1);
echo $red2."[".$green2.$user.$red2."]"."\n";
sleep(1);
echo$green2."◼$putih2 $ecID\n\n";
echo$red2. ">$lblue2 Token$putih2  :$kuning2 $token"."\n";
echo$red2. ">$lblue2 Boosts$putih2 :";echo$kuning2." $bost2"."X ";echo $red2."($putih2 Claim every 60s$red2)\n";
echo$r2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
echo $red2.">>> \033[1;32mRunning";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n\n";
// START
while(true){
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://bestautofaucet.com/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
if($token == ""){
echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
sleep(1);
exit;
}else{
if($token == "0"){
sleep(1);
echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
sleep(2);
echo"\n";
echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
sleep(1);
echo$putih2."Please wait ";
sleep(1);
echo$red2."•";
sleep(1);
echo$kuning2."•";
sleep(1);
echo$green2."•";
sleep(1);
system("xdg-open https://bestautofaucet.com/sl");
sleep(1);
exit;
}else{
echo $reset;



$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://bestautofaucet.com/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
echo"\n,";
for ($i=60;$i>-1;$i--){
echo "\r                                                                    \r";
date_default_timezone_set('Asia/Jakarta');
echo $red2."[ "; echo$green2."START";echo"$red2 | ";echo$lblue2. date('H:i:s');echo"$red2 ]";
echo $yellow2." Please Wait ";echo$green2."... ";echo$ungu2."( ";echo$putih2."$i";echo$putih2."s";echo$ungu2." )";
sleep(1);
echo "\r                                                                     \r";
}



$header = array(
"user-agent:".$useragent,
"referer: https://bestautofaucet.com/session/autofaucet",
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Post
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://bestautofaucet.com/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
$data = "";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $cek = curl_exec($ch);
$r1 = explode('Successfully sent',$cek);
if(isset($r1[1])){
  $r1 = explode('to',$r1[1])[0];
}
$r2 = explode('Successfully sent',$cek);
if(isset($r2[2])){
  $r2 = explode('to',$r2[2])[0];
}
$r3 = explode('Successfully sent',$cek);
if(isset($r3[3])){
  $r3 = explode('to',$r3[3])[0];
}
$r4 = explode('Successfully sent',$cek);
if(isset($r4[4])){
  $r4 = explode('to',$r4[4])[0];
}
$r5 = explode('Successfully sent',$cek);
if(isset($r5[5])){
  $r5 = explode('to',$r5[5])[0];
}
$r6 = explode('Successfully sent',$cek);
if(isset($r6[6])){
  $r6 = explode('to',$r6[6])[0];
}
$r7 = explode('Successfully sent',$cek);
if(isset($r7[7])){
  $r7 = explode('to',$r7[7])[0];
}
$r8 = explode('Successfully sent',$cek);
if(isset($r8[8])){
  $r8 = explode('to',$r8[8])[0];
}
$r9 = explode('Successfully sent',$cek);
if(isset($r9[9])){
  $r9 = explode('to',$r9[9])[0];
}
$r10 = explode('Successfully sent',$cek);
if(isset($r10[10])){
  $r10 = explode('to',$r10[10])[0];
}
$r11 = explode('Successfully sent',$cek);
if(isset($r11[11])){
  $r11 = explode('to',$r11[11])[0];
}
$r12 = explode('Successfully sent',$cek);
if(isset($r12[12])){
  $r12 = explode('to',$r12[12])[0];
}
$r13 = explode('Successfully sent',$cek);
if(isset($r13[13])){
  $r13 = explode('to',$r13[13])[0];
}
$r14 = explode('Successfully sent',$cek);
if(isset($r14[14])){
  $r14 = explode('to',$r14[14])[0];
}
$r15 = explode('Successfully sent',$cek);
if(isset($r15[15])){
  $r15 = explode('to',$r15[15])[0];
}
date_default_timezone_set('Asia/Jakarta');
echo$ungu2."════════════════════";echo $red2."[ "; echo$lblue2. date('d-F-Y').$reset;echo"$red2 | ";echo$kuning2. date('H:i:s');echo$red2." ]";echo$ungu2."═══════════════════\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r1\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r2\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ms\033[1;31m]$kuning2$r3\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mm\033[1;31m]$kuning2$r4\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37me\033[1;31m]$kuning2$r5\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;31m•\033[1;31m]$kuning2$r6\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mA\033[1;31m]$kuning2$r7\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mw\033[1;31m]$kuning2$r8\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mX\033[1;31m]$kuning2$r9\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37m-\033[1;31m]$kuning2$r10\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mP\033[1;31m]$kuning2$r11\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ml\033[1;31m]$kuning2$r12\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mo\033[1;31m]$kuning2$r13\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r14\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r15\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$blue2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
}}}
}






// MENU 4 RUN PROINFINITY.FUN
if($menu== 4){
sleep(1);
echo "\n\n\n\033[1;31m[\033[1;37m+\033[1;31m]$yellow2 Boosts -?X- $red2($green2 proinfinity.fun$red2 )$kuning2 :$putih2 ";
$bost3 = trim(fgets(STDIN));

if(file_exists("bst3.php")){
$save = fopen("bst3.php", "w");
  fwrite($save, "
");

fwrite($save,'$bost3 = "'.$bost3.'";
');
fclose($save);
}else{
  $save = fopen("bst3.php", "w");
  fwrite($save, "
");

  fwrite($save,'$bost3 = "'.$bost3.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>>>$putih2 Host        :$green2 proinfinity.fun
$red2>>>$putih2 Script Type :$ungu2 AutoFaucet$r2 Instant Withdraw to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n";
//Menerima Data
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> INFINITY Coin: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
sleep(1);
echo$red2. "◼$kuning2 Welcome ";
sleep(1);
echo $red2."[".$green2.$user.$red2."]"."\n";
sleep(1);
echo$green2."◼$putih2 $ecID\n\n";
echo$red2. ">$lblue2 Token$putih2  :$kuning2 $token"."\n";
echo$red2. ">$lblue2 Boosts$putih2 :";echo$kuning2." $bost3"."X ";echo $red2."($putih2 Claim every 60s$red2)\n";
echo$r2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
echo $red2.">>> \033[1;32mRunning";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n\n";
// START
while(true){
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
if($token == ""){
echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
sleep(1);
exit;
}else{
if($token == "0"){
sleep(1);
echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
sleep(2);
echo"\n";
echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
sleep(1);
echo$putih2."Please wait ";
sleep(1);
echo$red2."•";
sleep(1);
echo$kuning2."•";
sleep(1);
echo$green2."•";
sleep(1);
system("xdg-open https://proinfinity.fun/sl");
sleep(1);
exit;
}else{
echo $reset;



$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
echo"\n,";
for ($i=60;$i>-1;$i--){
echo "\r                                                                    \r";
date_default_timezone_set('Asia/Jakarta');
echo $red2."[ "; echo$green2."START";echo"$red2 | ";echo$lblue2. date('H:i:s');echo"$red2 ]";
echo $yellow2." Please Wait ";echo$green2."... ";echo$ungu2."( ";echo$putih2."$i";echo$putih2."s";echo$ungu2." )";
sleep(1);
echo "\r                                                                     \r";
}



$header = array(
"user-agent:".$useragent,
"referer: https://proinfinity.fun/session/autofaucet",
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Post
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
$data = "";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $cek = curl_exec($ch);
$r1 = explode('Successfully sent',$cek);
if(isset($r1[1])){
  $r1 = explode('to',$r1[1])[0];
}
$r2 = explode('Successfully sent',$cek);
if(isset($r2[2])){
  $r2 = explode('to',$r2[2])[0];
}
$r3 = explode('Successfully sent',$cek);
if(isset($r3[3])){
  $r3 = explode('to',$r3[3])[0];
}
$r4 = explode('Successfully sent',$cek);
if(isset($r4[4])){
  $r4 = explode('to',$r4[4])[0];
}
$r5 = explode('Successfully sent',$cek);
if(isset($r5[5])){
  $r5 = explode('to',$r5[5])[0];
}
$r6 = explode('Successfully sent',$cek);
if(isset($r6[6])){
  $r6 = explode('to',$r6[6])[0];
}
$r7 = explode('Successfully sent',$cek);
if(isset($r7[7])){
  $r7 = explode('to',$r7[7])[0];
}
$r8 = explode('Successfully sent',$cek);
if(isset($r8[8])){
  $r8 = explode('to',$r8[8])[0];
}
$r9 = explode('Successfully sent',$cek);
if(isset($r9[9])){
  $r9 = explode('to',$r9[9])[0];
}
$r10 = explode('Successfully sent',$cek);
if(isset($r10[10])){
  $r10 = explode('to',$r10[10])[0];
}
$r11 = explode('Successfully sent',$cek);
if(isset($r11[11])){
  $r11 = explode('to',$r11[11])[0];
}
$r12 = explode('Successfully sent',$cek);
if(isset($r12[12])){
  $r12 = explode('to',$r12[12])[0];
}
$r13 = explode('Successfully sent',$cek);
if(isset($r13[13])){
  $r13 = explode('to',$r13[13])[0];
}
$r14 = explode('Successfully sent',$cek);
if(isset($r14[14])){
  $r14 = explode('to',$r14[14])[0];
}
$r15 = explode('Successfully sent',$cek);
if(isset($r15[15])){
  $r15 = explode('to',$r15[15])[0];
}
date_default_timezone_set('Asia/Jakarta');
echo$ungu2."════════════════════";echo $red2."[ "; echo$lblue2. date('d-F-Y').$reset;echo"$red2 | ";echo$kuning2. date('H:i:s');echo$red2." ]";echo$ungu2."═══════════════════\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r1\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r2\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ms\033[1;31m]$kuning2$r3\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mm\033[1;31m]$kuning2$r4\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37me\033[1;31m]$kuning2$r5\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;31m•\033[1;31m]$kuning2$r6\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mA\033[1;31m]$kuning2$r7\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mw\033[1;31m]$kuning2$r8\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mX\033[1;31m]$kuning2$r9\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37m-\033[1;31m]$kuning2$r10\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mP\033[1;31m]$kuning2$r11\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ml\033[1;31m]$kuning2$r12\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mo\033[1;31m]$kuning2$r13\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r14\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r15\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$blue2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
}}}
}







// MENU 5 PHOENIXFAUCETS.XYZ
if($menu== 5){
sleep(1);
echo "\n\n\n\033[1;31m[\033[1;37m+\033[1;31m]$yellow2 Boosts -?X- $red2($green2 phoenixfaucets.xyz$red2 )$kuning2 :$putih2 ";
$bost4 = trim(fgets(STDIN));

if(file_exists("bst4.php")){
$save = fopen("bst4.php", "w");
  fwrite($save, "
");

fwrite($save,'$bost4 = "'.$bost4.'";
');
fclose($save);
}else{
  $save = fopen("bst4.php", "w");
  fwrite($save, "
");

  fwrite($save,'$bost4 = "'.$bost4.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>>>$putih2 Host        :$green2 phoenixfaucets.xyz
$red2>>>$putih2 Script Type :$ungu2 AutoFaucet$r2 Instant Withdraw to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n";
//Menerima Data
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://phoenixfaucets.xyz/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Phoenix Token: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
sleep(1);
echo$red2. "◼$kuning2 Welcome ";
sleep(1);
echo $red2."[".$green2.$user.$red2."]"."\n";
sleep(1);
echo$green2."◼$putih2 $ecID\n\n";
echo$red2. ">$lblue2 Token$putih2  :$kuning2 $token"."\n";
echo$red2. ">$lblue2 Boosts$putih2 :";echo$kuning2." $bost4"."X ";echo $red2."($putih2 Claim every 60s$red2)\n";
echo$r2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
echo $red2.">>> \033[1;32mRunning";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n\n";
// START
while(true){
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://phoenixfaucets.xyz/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
if($token == ""){
echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
sleep(1);
exit;
}else{
if($token == "0"){
sleep(1);
echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
sleep(2);
echo"\n";
echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
sleep(1);
echo$putih2."Please wait ";
sleep(1);
echo$red2."•";
sleep(1);
echo$kuning2."•";
sleep(1);
echo$green2."•";
sleep(1);
system("xdg-open https://phoenixfaucets.xyz/sl");
sleep(1);
exit;
}else{
echo $reset;



$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://phoenixfaucets.xyz/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
echo"\n,";
for ($i=60;$i>-1;$i--){
echo "\r                                                                    \r";
date_default_timezone_set('Asia/Jakarta');
echo $red2."[ "; echo$green2."START";echo"$red2 | ";echo$lblue2. date('H:i:s');echo"$red2 ]";
echo $yellow2." Please Wait ";echo$green2."... ";echo$ungu2."( ";echo$putih2."$i";echo$putih2."s";echo$ungu2." )";
sleep(1);
echo "\r                                                                     \r";
}



$header = array(
"user-agent:".$useragent,
"referer: https://phoenixfaucets.xyz/session/autofaucet",
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22EC-UserId-615784%22%2C%22coins%22:[%22BNB%22%2C%22ADA%22%2C%22LTC%22]%2C%22mode%22:%22multi%22%2C%22boost%22:%221%22%2C%22payout_mode%22:%22ec%22}");
// Curl Post
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://phoenixfaucets.xyz/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
$data = "";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $cek = curl_exec($ch);
$r1 = explode('Successfully sent',$cek);
if(isset($r1[1])){
  $r1 = explode('to',$r1[1])[0];
}
$r2 = explode('Successfully sent',$cek);
if(isset($r2[2])){
  $r2 = explode('to',$r2[2])[0];
}
$r3 = explode('Successfully sent',$cek);
if(isset($r3[3])){
  $r3 = explode('to',$r3[3])[0];
}
$r4 = explode('Successfully sent',$cek);
if(isset($r4[4])){
  $r4 = explode('to',$r4[4])[0];
}
$r5 = explode('Successfully sent',$cek);
if(isset($r5[5])){
  $r5 = explode('to',$r5[5])[0];
}
$r6 = explode('Successfully sent',$cek);
if(isset($r6[6])){
  $r6 = explode('to',$r6[6])[0];
}
$r7 = explode('Successfully sent',$cek);
if(isset($r7[7])){
  $r7 = explode('to',$r7[7])[0];
}
$r8 = explode('Successfully sent',$cek);
if(isset($r8[8])){
  $r8 = explode('to',$r8[8])[0];
}
$r9 = explode('Successfully sent',$cek);
if(isset($r9[9])){
  $r9 = explode('to',$r9[9])[0];
}
$r10 = explode('Successfully sent',$cek);
if(isset($r10[10])){
  $r10 = explode('to',$r10[10])[0];
}
$r11 = explode('Successfully sent',$cek);
if(isset($r11[11])){
  $r11 = explode('to',$r11[11])[0];
}
$r12 = explode('Successfully sent',$cek);
if(isset($r12[12])){
  $r12 = explode('to',$r12[12])[0];
}
$r13 = explode('Successfully sent',$cek);
if(isset($r13[13])){
  $r13 = explode('to',$r13[13])[0];
}
$r14 = explode('Successfully sent',$cek);
if(isset($r14[14])){
  $r14 = explode('to',$r14[14])[0];
}
$r15 = explode('Successfully sent',$cek);
if(isset($r15[15])){
  $r15 = explode('to',$r15[15])[0];
}
date_default_timezone_set('Asia/Jakarta');
echo$ungu2."════════════════════";echo $red2."[ "; echo$lblue2. date('d-F-Y').$reset;echo"$red2 | ";echo$kuning2. date('H:i:s');echo$red2." ]";echo$ungu2."═══════════════════\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r1\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r2\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ms\033[1;31m]$kuning2$r3\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mm\033[1;31m]$kuning2$r4\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37me\033[1;31m]$kuning2$r5\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;31m•\033[1;31m]$kuning2$r6\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mA\033[1;31m]$kuning2$r7\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mw\033[1;31m]$kuning2$r8\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mX\033[1;31m]$kuning2$r9\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37m-\033[1;31m]$kuning2$r10\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mP\033[1;31m]$kuning2$r11\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37ml\033[1;31m]$kuning2$r12\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mo\033[1;31m]$kuning2$r13\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mi\033[1;31m]$kuning2$r14\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$red2."[\033[1;37mt\033[1;31m]$kuning2$r15\033[1;31m> \033[1;32mSuccessfully sent to \33[37;1mE\033[1;31mX\033[1;37mpress\033[1;31mC\033[1;37mrypto\n";
echo$blue2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
}}}
}


// MENU 6 SINGLE COIN
if($menu== 6){
sleep(1);
echo "\n\n\n\033[1;31m[\033[1;37m+\033[1;31m]$yellow2 Boosts -?X- $red2($green2 proinfinity.fun$red2 )$kuning2 :$putih2 ";
$bostSC = trim(fgets(STDIN));

if(file_exists("bstSC.php")){
$save = fopen("bstSC.php", "w");
  fwrite($save, "
");

fwrite($save,'$bostSC = "'.$bostSC.'";
');
fclose($save);
}else{
  $save = fopen("bstSC.php", "w");
  fwrite($save, "
");

  fwrite($save,'$bostSC = "'.$bostSC.'";
');
fclose($save);
}
sleep(2);
echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
sleep(1);
echo$putih2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
system('clear');
sleep(1);
echo $banner1 ="
$lblue2       d8888              Y88b  \033[1;33m d88P          888          d8b 888
$lblue2      d88888               Y88b\033[1;33m d88P           888          Y8P 888
$lblue2     d88P888                Y88o\033[1;33m88P            888              888
$lblue2    d88P 888 888  888  888   Y888\033[1;33mP    88888b.  888  .d88b.  888 888888
$lblue2   d88P  888 888  888  888   d888b   \033[1;33m 888 *88b 888 d88**88b 888 888
$lblue2  d88P   888 888  888  888  d88888b   \033[1;33m888  888 888 888  888 888 888
$lblue2 d8888888888 Y88b 888 d88P d88P Y88b  \033[1;33m888 d88P 888 Y88..88P 888 Y88b.
\033[1;36md88P     888  *Y8888888P* d88P   Y88b 8\033[1;33m8888P*  888  *Y88P*  888  *Y888
$lblue2                                      88\033[1;33m8
$lblue2                                      888
$lblue2                                      888       $red2>\033[1;32mVersion v2.9

$red2>>>$putih2 Host        :$green2 proinfinity.fun
$red2>>>$putih2 Script Type :$ungu2 AutoFaucet$kuning2 Single Coin - SHIBA INU$r2 Manual Withdraw

$kuning2======================================================================
\033[1;91m ◼$putih2 Instagram :$green2 https://instagram.com/awx_ploit
\033[1;91m ◼$putih2 Youtube   :$green2 AwX-Ploit
\033[1;91m ◼$putih2 Github    :$green2 https://github.com/AwX-Ploit
$kuning2----------------------------------------------------------------------
$red2>>>$putih2 Donation :$green2 https://saweria.co/AwXploit
$kuning2======================================================================\n";
echo"\n";
include("data.php");

include('bstSC.php');

//Menerima Data
$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[]%2C%22single_mode_coin%22:%22SHIB%22%2C%22mode%22:%22single%22%2C%22boost%22:%22$bostSC%22%2C%22payout_mode%22:%22balance%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);

$token = explode('<i class="fas fa-coins"></i> INFINITY Coin: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
$b = explode('coins/shib.svg" alt="">',$res);
if(isset($b[1])){
 $b = explode('</div>',$b[1])[0];
}

sleep(1);
echo$red2. "◼$kuning2 Welcome ";
sleep(1);
echo $red2."[".$green2.$user.$red2."]"."\n";
sleep(1);
echo$green2."◼$putih2 $ecID\n\n";
echo$red2. ">$lblue2 Token$putih2   :$kuning2 $token"."\n";
echo$red2. "[$green2 Account Balance$red2 ] >$kuning2$b"."\n";
echo$red2. ">$lblue2 Boosts$putih2 :";echo$kuning2." $bostSC"."X ";echo $red2."($putih2 Claim every 60s$red2)\n";
echo$r2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
echo $red2.">>> \033[1;32mRunning";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo".\n\n\n";
// START
while(true){

$header=array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[]%2C%22single_mode_coin%22:%22SHIB%22%2C%22mode%22:%22single%22%2C%22boost%22:%22$bostSC%22%2C%22payout_mode%22:%22balance%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
if($token == ""){
echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
sleep(1);
exit;
}else{
if($token == "0"){
sleep(1);
echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
sleep(2);
echo"\n";
echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
sleep(1);
echo$putih2."Please wait ";
sleep(1);
echo$red2."•";
sleep(1);
echo$kuning2."•";
sleep(1);
echo$green2."•";
sleep(1);
system("xdg-open https://proinfinity.fun/sl");
sleep(1);
exit;
}else{
echo $reset;



$header = array(
"user-agent:".$useragent,
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[]%2C%22single_mode_coin%22:%22SHIB%22%2C%22mode%22:%22single%22%2C%22boost%22:%22$bostSC%22%2C%22payout_mode%22:%22balance%22}");
// Curl Get
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $res = curl_exec($ch);
$token = explode('<i class="fas fa-coins"></i> Tokens: ',$res);
if(isset($token[1])){
  $token = explode('</div>',$token[1])[0];
}
echo"\n,";
for ($i=60;$i>-1;$i--){
echo "\r                                                                    \r";
date_default_timezone_set('Asia/Jakarta');
echo $red2."[ "; echo$green2."STARTING";echo"$red2 | ";echo$lblue2. date('H:i:s');echo"$red2 ]";
echo $yellow2." Please Wait ";echo$green2."... ";echo$ungu2."( ";echo$putih2."$i";echo$putih2."s";echo$ungu2." )";
sleep(1);
echo "\r                                                                     \r";
}



$header = array(
"user-agent:".$useragent,
"referer: https://proinfinity.fun/session/autofaucet",
"cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[]%2C%22single_mode_coin%22:%22SHIB%22%2C%22mode%22:%22single%22%2C%22boost%22:%22$bostSC%22%2C%22payout_mode%22:%22balance%22}");
// Curl Post
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://proinfinity.fun/session/autofaucet");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
$data = "";
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $cek = curl_exec($ch);
$r2 = explode('coins/shib.svg" alt="">',$cek);
if(isset($r2[1])){
 $r2 = explode('</div>',$r2[1])[0];
}



date_default_timezone_set('Asia/Jakarta');
echo$ungu2."════════════════════";echo $red2."[ "; echo$lblue2. date('d-F-Y').$reset;echo"$red2 | ";echo$kuning2. date('H:i:s');echo$red2." ]";echo$ungu2."═══════════════════\n";
echo$red2."[\033[1;37m✓\033[1;31m]$kuning2 Your Account Balance Now\n                             \033[1;31m>$green2$r2";
echo$blue2."══════════════════════════════════════════════════════════════════════\n";
sleep(1);
}}}
}



// MENU 7 JOIN GRUP
if($menu== 7){
echo"\n\n";
sleep(1);
echo$green2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(2);
system(" xdg-open https://chat.whatsapp.com/IWFGtvAIYIM72aquw3XlZK ");
sleep(3);
echo"\n\n";
echo $enter = "[Process completed (code 4) - press Enter]";
$enter = trim(fgets(STDIN));
}





// MENU 8 CONTACT AUTHOR
if($menu== 8){
echo"\n\n";
sleep(1);
echo$green2. " Please wait";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(2);
system (" xdg-open https://wa.me/+6281617922247?text=~@user:+serverID_6295+++++++++++++++++++++++++++++++++++++++++++++++++++Message:+Assalamualaikum+bang");
sleep(3);
echo"\n\n";
echo $enter = "[Process completed (code 5) - press Enter]";
$enter = trim(fgets(STDIN));
}



// CLOSING WHILE MENU
}