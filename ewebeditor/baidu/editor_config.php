<?php
require_once(dirname(__FILE__)."/../../inc/common.inc.php");
$URL = "$webdb[www_url]/ewebeditor/baidu/";
preg_match("/http:\/\/([^\/]+)(.*)/is",$webdb['www_url'],$array);
$HOST = $array[1];
$PATH = $array[2];
?>

/**
 *  ueditor����������
 *  �������������������༭��������
 */
/**************************��ʾ********************************
 * ���б�ע�͵��������ΪUEditorĬ��ֵ��
 * �޸�Ĭ������������ȷ���Ѿ���ȫ��ȷ�ò�������ʵ��;��
 * ��Ҫ�������޸ķ�����һ����ȡ���˴�ע�ͣ�Ȼ���޸ĳɶ�Ӧ��������һ������ʵ�����༭��ʱ�����Ӧ������
 * �������༭��ʱ����ֱ��ʹ�þɰ������ļ��滻�°������ļ�,���õ��ľɰ������ļ�����ȱ���¹�������Ĳ��������½ű�����
 **************************��ʾ********************************/


(function () {
    /**
     * �༭����Դ�ļ���·����������ʾ�ĺ����ǣ��Ա༭��ʵ����ҳ��Ϊ��ǰ·����ָ��༭����Դ�ļ�����dialog���ļ��У���·����
     * ���ںܶ�ͬѧ��ʹ�ñ༭����ʱ����ֵ�����·�����⣬�˴�ǿ�ҽ�����ʹ��"�������վ��Ŀ¼�����·��"�������á�
     * "�������վ��Ŀ¼�����·��"Ҳ������б�ܿ�ͷ������"/myProject/ueditor/"������·����
     * ���վ�����ж������ͬһ�㼶��ҳ����Ҫʵ�����༭������������ͬһUEditor��ʱ�򣬴˴���URL���ܲ�������ÿ��ҳ��ı༭����
     * ��ˣ�UEditor�ṩ����Բ�ͬҳ��ı༭���ɵ������õĸ�·����������˵������Ҫʵ�����༭����ҳ�����д�����´��뼴�ɡ���Ȼ����Ҫ��˴���URL���ڶ�Ӧ�����á�
     * window.UEDITOR_HOME_URL = "/xxxx/xxxx/";
     */
    var URL;

    /**
     * �˴�����д��������UEditorС���Ա����ʹ�ã��ⲿ�����û��밴������˵����ʽ���ü��ɣ����鱣���������У��Լ��ݿ��ھ���ÿ��ҳ������window.UEDITOR_HOME_URL�Ĺ��ܡ�
     */
    var tmp = window.location.pathname;
        URL = window.UEDITOR_HOME_URL||tmp.substr(0,tmp.lastIndexOf("\/")+1).replace("_examples/","").replace("website/","");//������������ó�ueditorĿ¼������վ�����·�����߾���·����ָ��http��ͷ�ľ���·����
	URL = "<?php echo $URL;?>";
    /**
     * ���������塣ע�⣬�˴������漰��·�������ñ���©URL������
     */
    window.UEDITOR_CONFIG = {

        //Ϊ�༭��ʵ�����һ��·����������ܱ�ע��
        UEDITOR_HOME_URL : URL

        //ͼƬ�ϴ�������
        ,imageUrl:URL+"php/imageUp.php"             //ͼƬ�ϴ��ύ��ַ
        ,imagePath:"<?php echo "$webdb[www_url]/$webdb[updir]/other/";?>"                     //ͼƬ������ַ��������fixedImagePath,�����������󣬿���������
        //,imageFieldName:"upfile"                   //ͼƬ���ݵ�key,���˴��޸ģ���Ҫ�ں�̨��Ӧ�ļ��޸Ķ�Ӧ����
        //,compressSide:0                            //�ȱ�ѹ���Ļ�׼��ȷ��maxImageSideLength�����Ĳ��ն���0Ϊ������ߣ�1Ϊ���տ�ȣ�2Ϊ���ո߶�
        //,maxImageSideLength:900                    //�ϴ�ͼƬ�������ı߳����������Զ��ȱ�����,�����ž�����һ���Ƚϴ��ֵ������������image.html��

        //�����ϴ�������
        ,fileUrl:URL+"php/fileUp.php"               //�����ϴ��ύ��ַ
        ,filePath:"<?php echo "$webdb[www_url]/$webdb[updir]/other/";?>"                   //����������ַ��ͬimagePath
        //,fileFieldName:"upfile"                    //�����ύ�ı��������˴��޸ģ���Ҫ�ں�̨��Ӧ�ļ��޸Ķ�Ӧ����

         //Զ��ץȡ������
        ,catchRemoteImageEnable:false               //�Ƿ���Զ��ͼƬץȡ,Ĭ�Ͽ���
        ,catcherUrl:URL +"php/getRemoteImage.php"   //����Զ��ͼƬץȡ�ĵ�ַ
        ,catcherPath:"<?php echo "$webdb[www_url]/$webdb[updir]/other/";?>"                  //ͼƬ������ַ��ͬimagePath
        //,catchFieldName:"upfile"                   //�ύ����̨Զ��ͼƬuri�ϼ������˴��޸ģ���Ҫ�ں�̨��Ӧ�ļ��޸Ķ�Ӧ����
        //,separater:'ue_separate_ue'               //�ύ����̨��Զ��ͼƬ��ַ�ַ����ָ���
        //,localDomain:[]                            //���ض���������������Զ��ͼƬץȡʱ������֮����������������µ�ͼƬ������ץȡ������

        //ͼƬ���߹���������
        ,imageManagerUrl:URL + "php/imageManager.php"       //ͼƬ���߹���Ĵ����ַ
        ,imageManagerPath:URL + "php/"                                    //ͼƬ������ַ��ͬimagePath

        //��Ļ��ͼ������
        ,snapscreenHost: '<?php echo $HOST;?>'                                  //��Ļ��ͼ��server���ļ����ڵ���վ��ַ����ip���벻Ҫ��http://
        ,snapscreenServerUrl: "<?php echo $PATH;?>/ewebeditor/baidu/php/imageUp.php" //��Ļ��ͼ��server�˱������UEditor�ķ�������Ϊ��URL +"server/upload/php/snapImgUp.php"��
        ,snapscreenPath: "<?php echo "$webdb[www_url]/$webdb[updir]/other/";?>"
        //,snapscreenServerPort: 80                                    //��Ļ��ͼ��server�˶˿�
        //,snapscreenImgAlign: 'center'                                //��ͼ��ͼƬĬ�ϵ��Ű淽ʽ


        //wordת��������
        ,wordImageUrl:URL + "php/imageUp.php"             //wordת���ύ��ַ
        ,wordImagePath:"<?php echo "$webdb[www_url]/$webdb[updir]/other/";?>"                       //
        //,wordImageFieldName:"upfile"                     //wordת��������˴��޸ģ���Ҫ�ں�̨��Ӧ�ļ��޸Ķ�Ӧ����


        //��ȡ��Ƶ���ݵĵ�ַ
        ,getMovieUrl:URL+"php/getMovie.php"                   //��Ƶ���ݻ�ȡ��ַ



        //�������ϵ����еĹ��ܰ�ť�������򣬿�����new�༭����ʵ��ʱѡ���Լ���Ҫ�Ĵ��¶���
        ,toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch','autotypeset', '|',
                 '|', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','selectall', 'cleardoc', '|', 'customstyle',
                'paragraph', '|','rowspacingtop', 'rowspacingbottom','lineheight', '|','fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', '|', '', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright',
                'imagecenter', '|', 'insertimage', 'emotion', 'insertvideo', 'attachment', 'map', 'gmap', 'insertframe','|',
                'horizontal', 'date', 'time', 'spechars','snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', '|',
                'print', 'preview', 'searchreplace','help']
        ]
        //�������ڹ�������ʱ��ʾ��tooltip��ʾ
        ,labelMap:{
            'anchor':'ê��', 'undo':'����', 'redo':'����', 'bold':'�Ӵ�', 'indent':'��������','snapscreen': '��ͼ',
            'italic':'б��', 'underline':'�»���', 'strikethrough':'ɾ����', 'subscript':'�±�',
            'superscript':'�ϱ�', 'formatmatch':'��ʽˢ', 'source':'Դ����', 'blockquote':'����',
            'pasteplain':'���ı�ճ��ģʽ', 'selectall':'ȫѡ', 'print':'��ӡ', 'preview':'Ԥ��',
            'horizontal':'�ָ���', 'removeformat':'�����ʽ', 'time':'ʱ��', 'date':'����',
            'unlink':'ȡ������', 'insertrow':'ǰ������', 'insertcol':'ǰ������', 'mergeright':'�Һϲ���Ԫ��', 'mergedown':'�ºϲ���Ԫ��',
            'deleterow':'ɾ����', 'deletecol':'ɾ����', 'splittorows':'��ֳ���', 'splittocols':'��ֳ���', 'splittocells':'��ȫ��ֵ�Ԫ��',
            'mergecells':'�ϲ������Ԫ��', 'deletetable':'ɾ�����', 'insertparagraphbeforetable':'���ǰ����', 'cleardoc':'����ĵ�',
            'fontfamily':'����', 'fontsize':'�ֺ�', 'paragraph':'�����ʽ', 'insertimage':'ͼƬ', 'inserttable':'���', 'link':'������',
            'emotion':'����', 'spechars':'�����ַ�', 'searchreplace':'��ѯ�滻', 'map':'Baidu��ͼ', 'gmap':'Google��ͼ',
            'insertvideo':'��Ƶ', 'help':'����', 'justifyleft':'�������', 'justifyright':'���Ҷ���', 'justifycenter':'���ж���',
            'justifyjustify':'���˶���', 'forecolor':'������ɫ', 'backcolor':'����ɫ', 'insertorderedlist':'�����б�',
            'insertunorderedlist':'�����б�', 'fullscreen':'ȫ��', 'directionalityltr':'������������', 'directionalityrtl':'������������',
            'RowSpacingTop':'��ǰ��', 'RowSpacingBottom':'�κ��','highlightcode':'�������', 'pagebreak':'��ҳ', 'insertframe':'����Iframe', 'imagenone':'Ĭ��',
            'imageleft':'�󸡶�', 'imageright':'�Ҹ���','attachment':'����', 'imagecenter':'����', 'wordimage':'ͼƬת��',
            'lineheight':'�м��', 'customstyle':'�Զ������','autotypeset': '�Զ��Ű�','webapp':'�ٶ�Ӧ��'
        }

        //webAppKey
        //�ٶ�Ӧ�õ�APIkey��ÿ��վ����������ȥ�ٶȹ���ע��һ��key��������ʹ��app����
        ,webAppKey:"00hiHF1bskXa67qrC617QmHq"


        //����������Ŀ
        //,isShow : true    //Ĭ����ʾ�༭��


        ,initialContent:''    //��ʼ���༭��������,Ҳ����ͨ��textarea/script��ֵ������������


        //,autoClearinitialContent:false //�Ƿ��Զ�����༭����ʼ���ݣ�ע�⣺���focus��������Ϊtrue,���ҲΪ�棬��ô�༭��һ�����ͻᴥ�����³�ʼ�������ݿ�������


        //,iframeCssUrl: URL + '/themes/default/iframe.css' //���༭���ڲ�����һ��css�ļ�


        //,textarea:'editorValue' // �ύ��ʱ����������ȡ�༭���ύ���ݵ����õĲ�������ʵ��ʱ���Ը�����name���ԣ��Ὣname������ֵ��Ϊÿ��ʵ���ļ�ֵ������ÿ��ʵ������ʱ���������ֵ


        //,focus:false //��ʼ��ʱ���Ƿ��ñ༭����ý���true��false


        //,minFrameHeight:320  // ��С�߶�,Ĭ��320



        //,autoClearEmptyNode : true //getContentʱ���Ƿ�ɾ���յ�inlineElement�ڵ㣨����Ƕ�׵������

        //,fullscreen : false //�Ƿ�����ʼ��ʱ��ȫ����Ĭ�Ϲر�


        //,readonly : false /�༭����ʼ��������,�༭�����Ƿ���ֻ���ģ�Ĭ����false


        //,zIndex : 900     //�༭���㼶�Ļ���,Ĭ����900


        //,imagePopup:true      //ͼƬ�����ĸ��㿪�أ�Ĭ�ϴ�


        //,initialStyle:'body{font-size:18px}'   //�༭���ڲ���ʽ,���������ı������


        //,emotionLocalization:false //�Ƿ������鱾�ػ���Ĭ�Ϲرա���Ҫ������ȷ��emotion�ļ����°��������ṩ��images�����ļ���


         ,enterTag:'p' //�༭���س���ǩ��p��br



        //,pasteplain:false  //�Ƿ��ı�ճ����falseΪ��ʹ�ô��ı�ճ����trueΪʹ�ô��ı�ճ��


        //iframeUrlMap
        //dialog���ݵ�·�� ���ᱻ�滻��URL,������һ���򿪣����������е�dialog��Ĭ��·��
        //,iframeUrlMap:{
        // 'anchor':'~/dialogs/anchor/anchor.html',
        // }


        //insertorderedlist
        //�����б����������
        //,insertorderedlist : [
        //['1,2,3...','decimal'],
        //['a,b,c...','lower-alpha'],
        //['i,ii,iii...','lower-roman'],
        //['A,B,C','upper-alpha'],
        //['I,II,III...','upper-roman']
        // ]


        //insertunorderedlist
        //�����б����������
        //,insertunorderedlist : [
        //['�� СԲȦ','circle'],
        //['�� СԲ��','disc'],
        //['�� С����','square']
        //]


        //fontfamily
        //����
        //,'fontfamily':[
        //   ['����',['����', 'SimSun']],
        //   ['����',['����', '����_GB2312', 'SimKai']],
        //   ['����',['����', 'SimHei']],
        //   ['����',['����', 'SimLi']],
        //   ['andale mono',['andale mono']],
        //   ['arial',['arial', 'helvetica', 'sans-serif']],
        //   ['arial black',['arial black', 'avant garde']],
        //   ['comic sans ms',['comic sans ms']],
        //   ['impact',['impact', 'chicago']],
        //   ['times new roman',['times new roman']]
        //  ]


        //fontsize
        //�ֺ�
        //,'fontsize':[10, 11, 12, 14, 16, 18, 20, 24, 36]


        //paragraph
        //�����ʽ ֵ:��ʾ������
        //,'paragraph':['p:����', 'h1:���� 1', 'h2:���� 2', 'h3:���� 3', 'h4:���� 4', 'h5:���� 5', 'h6:���� 6']


        //rowspacingtop
        //�μ�� ֵ����ʾ��������ͬ
        //,'rowspacingtop':['5', '10', '15', '20', '25']


        //rowspacingBottom
        //�μ�� ֵ����ʾ��������ͬ
        //,'rowspacingtop':['5', '10', '15', '20', '25']


        //lineheight
        //���ڼ�� ֵ����ʾ��������ͬ
        //,'lineheight':['1', '1.5','1.75','2', '3', '4', '5']


        //customstyle
        //�Զ�����ʽ
        //block��Ԫ�����������ö�����߼����õģ�inline��Ԫ������BIU���߼�����
        //����ʹ��һЩ���õı�ǩ
        //����˵��
        //tag ʹ�õı�ǩ����
        //label ��ʾ������Ҳ��������ʶ��ͬ���͵ı�ʶ����ע�����ֵÿ��Ҫ��ͬ��
        //style ��ӵ���ʽ
        //ÿһ���������һ���Զ������ʽ
        //,'customstyle':[
        //      {tag:'h1', label:'���б���', style:'border-bottom:#ccc 2px solid;padding:0 4px 0 0;text-align:center;margin:0 0 20px 0;'},
        //      {tag:'h1', label:'�������', style:'border-bottom:#ccc 2px solid;padding:0 4px 0 0;margin:0 0 10px 0;'},
        //      {tag:'span', label:'ǿ��', style:'font-style:italic;font-weight:bold;color:#000'},
        //      {tag:'span', label:'����ǿ��', style:'font-style:italic;font-weight:bold;color:rgb(51, 153, 204)'}
        //  ]


        //contextMenu //�������Ҽ��˵������ݣ����Բο�plugins/contextmenu.js��ߵ�Ĭ�ϲ˵�������
        //,contextMenu:[
        //    {
        //        label:'��ʾ������',
        //        cmdName:'ִ�е�command������������Ҽ��˵�ʱ',
        //        //exec��ѡ������exec�ͻ��ڵ��ʱִ�����function,
        //        exec:function () {
        //            //this�ǵ�ǰ�༭����ʵ��
        //            //this.ui._dialogs['inserttableDialog'].open();
        //        }
        //    }
        //   ]



        //wordCount
        ,wordCount:false          //�Ƿ�������ͳ��
        //,maximumWords:10000       //���������ַ���
        //,wordCountMsg:'��ǰ������ {#count} ���ַ���������������{#leave} ���ַ� '   //����ͳ����ʾ��{#count}����ǰ������{#leave}����������������ַ���
        //,wordOverFlowMsg:'<span style="color:red;">��������ַ������Ѿ������������ֵ�����������ܻ�ܾ����棡</span>'    //��������������ʾ



        //highlightcode
        // �������ʱ��Ҫ���صĵ����������·��
        // ,highlightJsUrl:URL + "third-party/SyntaxHighlighter/shCore.js"
        // ,highlightCssUrl:URL + "third-party/SyntaxHighlighter/shCoreDefault.css"


        //tab
        //���tab��ʱ�ƶ��ľ���,tabSize������tabNodeʲô�ַ���Ϊ��λ
        //,tabSize:4
        //,tabNode:'&nbsp;'


        //elementPathEnabled
        //�Ƿ�����Ԫ��·����Ĭ������ʾ
        //,elementPathEnabled : true

        //removeFormat
        //�����ʽʱ����ɾ���ı�ǩ������
        //removeForamtTags��ǩ
        //,removeFormatTags:'b,big,code,del,dfn,em,font,i,ins,kbd,q,samp,small,span,strike,strong,sub,sup,tt,u,var'
        //removeFormatAttributes����
        //,removeFormatAttributes:'class,style,lang,width,height,align,hspace,valign'



         //undo
         //���������˵Ĵ���,Ĭ��20
         //,maxUndoCount:20
         //��������ַ���������ֵʱ������һ���ֳ�
         //,maxInputCount:20



        //autoHeightEnabled
        // �Ƿ��Զ�����,Ĭ��true
        ,autoHeightEnabled:false


        //autoFloatEnabled
        //�Ƿ񱣳�toolbar��λ�ò���,Ĭ��true
        //,autoFloatEnabled:true


        //indentValue
        //������������,Ĭ����2em
        //,indentValue:'2em'


        //pageBreakTag
        //��ҳ��ʶ��,Ĭ����_baidu_page_break_tag_
        ,pageBreakTag:'[-page-]'



        //sourceEditor
        //Դ��Ĳ鿴��ʽ,codemirror �Ǵ��������textarea���ı���,Ĭ����codemirror
        //,sourceEditor:"codemirror"
        //���sourceEditor��codemirror����������һ����������
        //codeMirrorJsUrl js���ص�·����Ĭ���� URL + "third-party/codemirror2.15/codemirror.js"
        //,codeMirrorJsUrl:URL + "third-party/codemirror2.15/codemirror.js"
        //codeMirrorCssUrl css���ص�·����Ĭ���� URL + "third-party/codemirror2.15/codemirror.css"
        //,codeMirrorCssUrl:URL + "third-party/codemirror2.15/codemirror.css"




        //serialize
        // ���ñ༭���Ĺ��˹���
        // serialize�Ǹ�object,����������blackList��whiteList���ԣ�Ĭ����{}
        // ����:
        //, serialize : {
        //      //���������༭������˵�һ�±�ǩ
        //      blackList:{style:1, link:1,object:1, applet:1, input:1, meta:1, base:1, button:1, select:1, textarea:1, '#comment':1, 'map':1, 'area':1}
        // }


        //autotypeset
        //  //�Զ��Ű����
        //  ,autotypeset:{
        //      mergeEmptyline : true,         //�ϲ�����
        //      removeClass : true,           //ȥ�������class
        //      removeEmptyline : false,      //ȥ������
        //      textAlign : "left" ,           //������Ű淽ʽ�������� left,right,center,justify ȥ��������Ա�ʾ��ִ���Ű�
        //      imageBlockLine : 'center',      //ͼƬ�ĸ�����ʽ����ռһ�о���,���Ҹ�����Ĭ��: center,left,right,none ȥ��������Ա�ʾ��ִ���Ű�
        //      pasteFilter : false,            //���ݹ������û��ճ������������
        //      clearFontSize : false,          //ȥ�����е���Ƕ�ֺţ�ʹ�ñ༭��Ĭ�ϵ��ֺ�
        //      clearFontFamily : false,        //ȥ�����е���Ƕ���壬ʹ�ñ༭��Ĭ�ϵ�����
        //      removeEmptyNode : false ,       // ȥ���սڵ�
        //      //����ȥ���ı�ǩ
        //      removeTagNames : {��ǩ����:1},
        //      indent : false,                 // ��������
        //      indentValue : '2em'             //���������Ĵ�С
        //  }

    };
})();

