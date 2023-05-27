?><?php
echo base64_decode('LS0tLS1Ub29sIEVuY29kZSBCeSBNWFQtLS0tLQ==');
sleep(2);
?><?php
error_reporting(0);
session_start();
system('clear');
sleep(1);
while (true){
echo "\033[1;92m╔════════════════════════════════════════════════════════════════════╗
║                                                                    ║
║                 █████╗   █████╗    ███╗      ╔██╗ █████╗                      ║
║                ███══██╗ ██╔══██╗ ████╗   ╔██╔╝██╔══██╗                     ║
║                 ██       ║ ███████║  ████║ ╔██ ║  ███████║                     ║
║                 ██  ██╗║ ██╔══██║ ██╔██ ║███╝  ██╔══██║                     ║
║                ███  ╚██║██║  ██║  ██║╚██╚██║   ██║  ██║                     ║
║                 █████╗╚╝██║  ██║██║   ╚═███║   ██║  ██║                     ║
║                 ╚════╝   ╚═╝  ╚═╝ ╚═╝    ╚═══╝  ╚═╝  ╚═╝                      ║
║                                                                    ║
╚════════════════════════════════════════════════════════════════════╝\n";
echo "\033[1;96m[1] Cài Server\n";
echo "\033[1;932m[2] Mở Server\n"; /// Link Key Đã tạo ở link1s.com
echo "\033[1;92mLựa Chọn: \033[1;33m";
      $luachon = trim(fgets(STDIN));
    if ($luachon == 1)  {
    sleep(1);
  //system('pkg install openjdk-17 -y -y && wget -O mad.zip  https://github.com/Mad-Neko/backup1/blob/main/mad.zip?raw=true && unzip mad.zip && clear ');
  system('pkg install openjdk-17 -y -y && wget -O src.zip  https://github.com/KhanhNguyen9872/Nro-Offline_src/blob/main/src.zip?raw=true && unzip src.zip && clear ');
system('rm -rf src.zip');
system('clear');
    
    sleep(1);
       continue;
    } else if ($luachon == 2)  {
    sleep(1);
        while (true){
$checkkey  = file('https://pastebin.com/raw/NdpZSWzh'); //// Linh Key
echo "\033[1;96m______________________\n";
echo "\033[1;93mHiếu lỏ:\033[1;91m Hello\n"; /// Hello
echo "\033[1;92mẤn Enter Để Chạy Server: \033[1;33m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0])  {
    sleep(1);
        echo "\033[1;35mĐang chạy server\n";
system('java -Xms100G  -Xmx100G -jar dist/Heroes_Z.jar');
        break;
    } else {
        echo "\033[1;91mSai Vui Lòng Nhập Lại\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
        break;
    } else {
        echo "\033[1;91mChọn Sai Vui Lòng Chọn Lại\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
