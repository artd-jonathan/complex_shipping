<?php
namespace Curso\ComplexShipping\Helper;

class DANE extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var str
     */
    private $codes;
    public function __construct() {
        $this->codes = [
            '11001',
            '13188',
            '13300',
            '13440',
            '13468',
            '13650',
            '13780',
            '13052',
            '13062',
            '13140',
            '13001',
            '13222',
            '13433',
            '13620',
            '13647',
            '13673',
            '13683',
            '13760',
            '13836',
            '13838',
            '13873',
            '13030',
            '13074',
            '13268',
            '13580',
            '13600',
            '13667',
            '13042',
            '13160',
            '13473',
            '13670',
            '13688',
            '13744',
            '13006',
            '13430',
            '13458',
            '13549',
            '13655',
            '13810',
            '13244',
            '13212',
            '13248',
            '13442',
            '13654',
            '13657',
            '13894',
            '15232',
            '15187',
            '15204',
            '15224',
            '15476',
            '15500',
            '15646',
            '15740',
            '15762',
            '15764',
            '15763',
            '15814',
            '15001',
            '15837',
            '15861',
            '15180',
            '15223',
            '15244',
            '15248',
            '15317',
            '15332',
            '15522',
            '15377',
            '15518',
            '15533',
            '15550',
            '15090',
            '15135',
            '15455',
            '15514',
            '15660',
            '15897',
            '15104',
            '15189',
            '15367',
            '15494',
            '15599',
            '15621',
            '15804',
            '15835',
            '15842',
            '15879',
            '15172',
            '15299',
            '15425',
            '15511',
            '15667',
            '15690',
            '15097',
            '15218',
            '15403',
            '15673',
            '15720',
            '15723',
            '15753',
            '15774',
            '15810',
            '15106',
            '15109',
            '15131',
            '15176',
            '15212',
            '15401',
            '15442',
            '15480',
            '15507',
            '15531',
            '15572',
            '15580',
            '15632',
            '15676',
            '15681',
            '15832',
            '15022',
            '15236',
            '15322',
            '15325',
            '15380',
            '15761',
            '15778',
            '15798',
            '15051',
            '15185',
            '15293',
            '15469',
            '15600',
            '15638',
            '15664',
            '15696',
            '15686',
            '15776',
            '15808',
            '15816',
            '15407',
            '15047',
            '15226',
            '15272',
            '15296',
            '15362',
            '15464',
            '15466',
            '15491',
            '15542',
            '15759',
            '15806',
            '15820',
            '15822',
            '15087',
            '15114',
            '15162',
            '15215',
            '15238',
            '15276',
            '15516',
            '15693',
            '15839',
            '15092',
            '15183',
            '15368',
            '15537',
            '15757',
            '15755',
            '15790',
            '17272',
            '17388',
            '17442',
            '17614',
            '17777',
            '17433',
            '17444',
            '17446',
            '17541',
            '17042',
            '17088',
            '17616',
            '17665',
            '17877',
            '17174',
            '17001',
            '17486',
            '17524',
            '17873',
            '17013',
            '17050',
            '17513',
            '17653',
            '17380',
            '17495',
            '17662',
            '17867',
            '18029',
            '18094',
            '18150',
            '18205',
            '18247',
            '18256',
            '18001',
            '18410',
            '18460',
            '18479',
            '18592',
            '18610',
            '18753',
            '18756',
            '18785',
            '18860',
            '85010',
            '85015',
            '85125',
            '85136',
            '85139',
            '85162',
            '85225',
            '85230',
            '85250',
            '85263',
            '85279',
            '85300',
            '85315',
            '85325',
            '85400',
            '85410',
            '85430',
            '85440',
            '85001',
            '19130',
            '19256',
            '19392',
            '19473',
            '19548',
            '19001',
            '19622',
            '19760',
            '19807',
            '19110',
            '19142',
            '19212',
            '19455',
            '19513',
            '19573',
            '19698',
            '19780',
            '19845',
            '19318',
            '19418',
            '19809',
            '19137',
            '19355',
            '19364',
            '19517',
            '19585',
            '19743',
            '19821',
            '19824',
            '19022',
            '19050',
            '19075',
            '19100',
            '19290',
            '19397',
            '19450',
            '19532',
            '19533',
            '19693',
            '19701',
            '19785',
            '20045',
            '20175',
            '20178',
            '20228',
            '20400',
            '20517',
            '20787',
            '20032',
            '20060',
            '20238',
            '20250',
            '20013',
            '20621',
            '20443',
            '20570',
            '20750',
            '20001',
            '20011',
            '20295',
            '20310',
            '20383',
            '20550',
            '20614',
            '20710',
            '20770',
            '27050',
            '27073',
            '27099',
            '27245',
            '27413',
            '27425',
            '27001',
            '27600',
            '27006',
            '27086',
            '27150',
            '27615',
            '27800',
            '27075',
            '27372',
            '27495',
            '27025',
            '27077',
            '27250',
            '27430',
            '27135',
            '27160',
            '27205',
            '27361',
            '27450',
            '27491',
            '27580',
            '27660',
            '27745',
            '27787',
            '27810',
            '23807',
            '23855',
            '23168',
            '23300',
            '23417',
            '23464',
            '23586',
            '23001',
            '23090',
            '23419',
            '23500',
            '23574',
            '23672',
            '23675',
            '23182',
            '23660',
            '23670',
            '23068',
            '23079',
            '23350',
            '23466',
            '23555',
            '23570',
            '23580',
            '23162',
            '23189',
            '23678',
            '23686',
            '25183',
            '25426',
            '25436',
            '25736',
            '25772',
            '25807',
            '25873',
            '25001',
            '25307',
            '25324',
            '25368',
            '25483',
            '25488',
            '25612',
            '25815',
            '25148',
            '25320',
            '25572',
            '25019',
            '25398',
            '25402',
            '25489',
            '25491',
            '25592',
            '25658',
            '25718',
            '25777',
            '25851',
            '25862',
            '25875',
            '25293',
            '25297',
            '25299',
            '25322',
            '25326',
            '25372',
            '25377',
            '25839',
            '25086',
            '25095',
            '25168',
            '25328',
            '25580',
            '25662',
            '25867',
            '25438',
            '25530',
            '25151',
            '25178',
            '25181',
            '25279',
            '25281',
            '25335',
            '25339',
            '25594',
            '25841',
            '25845',
            '25258',
            '25394',
            '25513',
            '25518',
            '25653',
            '25823',
            '25871',
            '25885',
            '25126',
            '25175',
            '25200',
            '25295',
            '25486',
            '25758',
            '25785',
            '25817',
            '25899',
            '25099',
            '25214',
            '25260',
            '25269',
            '25286',
            '25430',
            '25473',
            '25769',
            '25799',
            '25898',
            '25740',
            '25754',
            '25053',
            '25120',
            '25290',
            '25312',
            '25524',
            '25535',
            '25649',
            '25743',
            '25805',
            '25506',
            '25035',
            '25040',
            '25599',
            '25123',
            '25245',
            '25386',
            '25596',
            '25645',
            '25797',
            '25878',
            '25154',
            '25224',
            '25288',
            '25317',
            '25407',
            '25745',
            '25779',
            '25781',
            '25793',
            '25843',
            '94343',
            '94886',
            '94001',
            '94885',
            '94663',
            '94888',
            '94887',
            '94884',
            '94883',
            '95015',
            '95025',
            '95200',
            '95001',
            '41013',
            '41026',
            '41298',
            '41306',
            '41319',
            '41548',
            '41770',
            '41791',
            '41016',
            '41020',
            '41078',
            '41132',
            '41206',
            '41349',
            '41357',
            '41001',
            '41524',
            '41615',
            '41676',
            '41799',
            '41801',
            '41872',
            '41885',
            '41378',
            '41396',
            '41483',
            '41518',
            '41797',
            '41006',
            '41244',
            '41359',
            '41503',
            '41530',
            '41551',
            '41660',
            '41668',
            '41807',
            '44035',
            '44090',
            '44430',
            '44560',
            '44001',
            '44847',
            '44078',
            '44098',
            '44110',
            '44279',
            '44378',
            '44420',
            '44650',
            '44855',
            '44874',
            '47058',
            '47170',
            '47460',
            '47555',
            '47660',
            '47798',
            '47030',
            '47053',
            '47189',
            '47268',
            '47288',
            '47570',
            '47980',
            '47161',
            '47205',
            '47258',
            '47541',
            '47551',
            '47605',
            '47675',
            '47745',
            '47960',
            '47001',
            '47245',
            '47318',
            '47545',
            '47692',
            '47703',
            '47707',
            '47720',
            '50251',
            '50270',
            '50287',
            '50313',
            '50350',
            '50370',
            '50400',
            '50325',
            '50330',
            '50450',
            '50577',
            '50590',
            '50683',
            '50711',
            '50001',
            '50006',
            '50110',
            '50150',
            '50226',
            '50245',
            '50318',
            '50606',
            '50680',
            '50686',
            '50223',
            '50689',
            '50124',
            '50568',
            '50573',
            '52240',
            '52207',
            '52254',
            '52260',
            '52381',
            '52480',
            '52001',
            '52683',
            '52788',
            '52885',
            '52036',
            '52320',
            '52385',
            '52411',
            '52418',
            '52435',
            '52506',
            '52565',
            '52612',
            '52678',
            '52699',
            '52720',
            '52838',
            '52079',
            '52250',
            '52520',
            '52390',
            '52427',
            '52473',
            '52490',
            '52621',
            '52696',
            '52835',
            '52019',
            '52051',
            '52083',
            '52110',
            '52203',
            '52233',
            '52256',
            '52258',
            '52378',
            '52399',
            '52405',
            '52540',
            '52685',
            '52687',
            '52693',
            '52694',
            '52786',
            '52022',
            '52210',
            '52215',
            '52224',
            '52227',
            '52287',
            '52317',
            '52323',
            '52352',
            '52354',
            '52356',
            '52560',
            '52573',
            '52585',
            '54051',
            '54223',
            '54313',
            '54418',
            '54660',
            '54680',
            '54871',
            '54109',
            '54250',
            '54720',
            '54810',
            '54003',
            '54128',
            '54206',
            '54245',
            '54344',
            '54385',
            '54398',
            '54498',
            '54670',
            '54800',
            '54001',
            '54261',
            '54405',
            '54553',
            '54673',
            '54874',
            '54125',
            '54174',
            '54480',
            '54518',
            '54520',
            '54743',
            '54099',
            '54172',
            '54239',
            '54347',
            '54377',
            '54599',
            '54820',
            '86219',
            '86001',
            '86320',
            '86568',
            '86569',
            '86571',
            '86573',
            '86755',
            '86757',
            '86760',
            '86749',
            '86865',
            '86885',
            '63001',
            '63111',
            '63130',
            '63212',
            '63302',
            '63548',
            '63272',
            '63690',
            '63190',
            '63401',
            '63470',
            '63594',
            '66170',
            '66400',
            '66440',
            '66001',
            '66682',
            '66045',
            '66075',
            '66088',
            '66318',
            '66383',
            '66594',
            '66687',
            '66456',
            '66572',
            '68176',
            '68209',
            '68211',
            '68245',
            '68296',
            '68298',
            '68320',
            '68322',
            '68344',
            '68500',
            '68522',
            '68524',
            '68720',
            '68745',
            '68755',
            '68770',
            '68147',
            '68152',
            '68160',
            '68162',
            '68207',
            '68266',
            '68318',
            '68425',
            '68432',
            '68468',
            '68669',
            '68684',
            '68686',
            '68051',
            '68079',
            '68121',
            '68167',
            '68217',
            '68229',
            '68264',
            '68370',
            '68464',
            '68498',
            '68502',
            '68533',
            '68549',
            '68679',
            '68682',
            '68855',
            '68872',
            '68081',
            '68092',
            '68235',
            '68575',
            '68655',
            '68689',
            '68895',
            '68001',
            '68132',
            '68169',
            '68255',
            '68276',
            '68307',
            '68406',
            '68418',
            '68444',
            '68547',
            '68615',
            '68705',
            '68780',
            '68820',
            '68867',
            '68013',
            '68020',
            '68077',
            '68101',
            '68179',
            '68190',
            '68250',
            '68271',
            '68324',
            '68327',
            '68368',
            '68377',
            '68397',
            '68385',
            '68572',
            '68573',
            '68673',
            '68773',
            '68861',
            '70265',
            '70429',
            '70771',
            '70230',
            '70204',
            '70473',
            '70508',
            '70001',
            '70221',
            '70523',
            '70713',
            '70820',
            '70823',
            '70110',
            '70215',
            '70233',
            '70235',
            '70418',
            '70670',
            '70702',
            '70717',
            '70742',
            '70124',
            '70400',
            '70678',
            '70708',
            '73030',
            '73055',
            '73270',
            '73283',
            '73349',
            '73443',
            '73520',
            '73148',
            '73226',
            '73352',
            '73449',
            '73873',
            '73067',
            '73168',
            '73217',
            '73483',
            '73504',
            '73555',
            '73616',
            '73622',
            '73675',
            '73026',
            '73043',
            '73124',
            '73200',
            '73268',
            '73275',
            '73001',
            '73547',
            '73624',
            '73678',
            '73854',
            '73024',
            '73236',
            '73319',
            '73563',
            '73585',
            '73671',
            '73770',
            '73152',
            '73347',
            '73408',
            '73411',
            '73461',
            '73686',
            '73861',
            '73870',
            '76036',
            '76111',
            '76113',
            '76126',
            '76248',
            '76306',
            '76318',
            '76606',
            '76616',
            '76670',
            '76828',
            '76834',
            '76890',
            '76020',
            '76041',
            '76054',
            '76100',
            '76147',
            '76243',
            '76246',
            '76250',
            '76400',
            '76403',
            '76497',
            '76622',
            '76823',
            '76845',
            '76863',
            '76895',
            '76109',
            '76122',
            '76736',
            '76001',
            '76130',
            '76233',
            '76275',
            '76364',
            '76377',
            '76520',
            '76563',
            '76869',
            '76892',
            '97161',
            '97001',
            '97511',
            '97777',
            '97666',
            '97889',
            '99773',
            '99524',
            '99001',
            '99624',
            
        ];
    }
    /**
     * @return integer
     */
    private function getRandomPosition() : int{
        return rand(0, count($this->codes));
    }
    /**
     * @param integer $position
     * @return str
     */
    private function getDANECodeFromArray(int $position){
        return $this->codes[$position];
    }
    /**
     * Undocumented function
     *
     * @param str $DANE
     * @return str
     */
    private function completeDANECode($DANE){
        // Complete with zeroes at the begining
        $start='';
        for ($i=0; $i < (5-strlen($DANE)); $i++) {
            $start.='0';
        }
        $temp_code = $start.$DANE;
        // Complete with zeroes at the end
        $end='';
        for ($i=0; $i < (8-strlen($temp_code)); $i++) {
            $end.='0';
        }
        $code = $temp_code.$end;
        return $code;
    }
    /**
     * @return void
     */
    public function getDANECode(){
        return $this->completeDANECode($this->getDANECodeFromArray($this->getRandomPosition()));
    }
}