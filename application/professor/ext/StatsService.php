<?php
    namespace application;
    /*
     * This class is responsible for accessing Sports Data's official
     * feeds using a production key and converting the XML data to PHP arrays
     * so the data can be manipulated and displayed.
     * 
     * @package services
     * @version 1.0
     * @author coreygelbaugh
     */
    Class SportsData{
        private $Golf_Images_v1="sztrw7jbdmjyt5sw3wmfqhrv";
        private $Golf_RealTime_v1="sgf33d4tyx9bz6easp34ehen";
        private $Golf_v2="a7bhtym6nt2xt2gpzd4rspcp";
        
        private $MLB_Images_v1="9bjzg5r5mu6x6u5fskyadvtu";
        private $MLB_Production_v2="327r6chn85p679h22brhafmr";
        private $MLB__RealTime_v3="zmb55ex5mag3j7kdtmpz6pgf";
        private $MLB_Production_v4="btcbesshfym39eqtw2bzncw7";
        private $MLB_RealTime_v4="btcbesshfym39eqtw2bzncw7";
        
        private $NASCAR_Images_v1="jpggay3shfxpse5jtc4tg32s";
        private $NASCAR_Production_v2="6wj6femkv6fj48w4mckksyw8";
        private $NASCAR_RealTime_v2="ydqq6zwvmacqfvuv684qfbrk";
        
        private $NBA_Images_v1="x8s9aqkcah8jqapt9vegxaq6";
        private $NBA_Production_v2="ttncdhbcpw2mnwzkbnya8rb6";
        private $NBA_Production_v3="3q47ryfzk6csezgb8n6rp83x";
        private $NBA_RealTime_v3="3q47ryfzk6csezgb8n6rp83x";
        
        private $NCAAFB_RealTime_v1="h8fq4eth5key8geqdtsv2jbe";
        private $NCAAFB_Images_v1="bxvutqu38qbaqhyaq68nk4s6";
        private $NCAAFB_Production_v2="rn45xsq6x6yuw6nj796tcz9v";
        
        private $NCAAMB_Images_v1="xp6gfxsp6kgxmuassmffnx7w";
        private $NCAAMB_Production_v2="kyft79nxd2zefe5guwq3rjy8";
        private $NCAAMB_Producion_v3="dmyu6kym78u5c7s6cu546u6p";
        private $NCAAMB_RealTime_v3="dmyu6kym78u5c7s6cu546u6p";
        
        private $NFL_Images_v1="b59kxp48st5kn7e3mnck4zzp";
        private $NFL_RealTime_v1="s2kr97mdj7fyk6bwatq8utxg";
        private $NFL_Production_v2="ys67ffg9kjbkshvuqsewsxwb";
        
        private $NHL_Images_v1="bnjg7dhauzabc9nxdurdfwn2";
        private $NHL_Production_v2="3y5mz5p6x3ehfkzxzg7ss4y6";
        private $NHL_Production_v3="yr3mxwesxy7v7xwvegrz3ja8";
        private $NHL_RealTime_v3="yr3mxwesxy7v7xwvegrz3ja8";

    }