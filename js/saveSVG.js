function SaveImage() {

    // var svgDoc = document.getElementById("SVGDoc").getSVGDocument();
    var svgDoc = document.getElementById("SVGDoc").innerHTML.trim();
    // � ��� ������������� ��� ���-�� ����?
    if (svgDoc != null) {
        // �������� ������ � ��������� ������ SVG-�����
        //�������� ������� (�������) 
        if (document.getElementById('canvas') == null) {
            var canvas = document.createElement('canvas');
            canvas.id = "canvas";
            document.body.appendChild(canvas);
            $(canvas).attr("style", 'display: none; visibility: hidden');
        } else {
            //������� �������
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height)
        };

        //�������� svg � ������
        canvg(document.getElementById('canvas'), svgDoc);

        //���������� ������� � png
        Canvas2Image.saveAsPNG(canvas);
    }
};


//���������-���������� ������
function onBlicks() {
    var blick = $("circle[style*='blick']");
    for (var i = 0; i < blick.length; i++) {
        if ($(blick[i]).attr('class') == undefined) $(blick[i]).attr('class', 'hiddenBlick');
        else $(blick[i]).removeAttr('class');
    }
}