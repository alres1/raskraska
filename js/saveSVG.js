function SaveImage() {

    // var svgDoc = document.getElementById("SVGDoc").getSVGDocument();
    var svgDoc = document.getElementById("SVGDoc").innerHTML.trim();
    // У нас действительно там что-то есть?
    if (svgDoc != null) {
        // Получаем доступ к объектной модели SVG-файла
        //создание канваса (скрытый) 
        if (document.getElementById('canvas') == null) {
            var canvas = document.createElement('canvas');
            canvas.id = "canvas";
            document.body.appendChild(canvas);
            $(canvas).attr("style", 'display: none; visibility: hidden');
        } else {
            //очистка канваса
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height)
        };

        //Загрузка svg в канвас
        canvg(document.getElementById('canvas'), svgDoc);

        //Сохранение канваса в png
        Canvas2Image.saveAsPNG(canvas);
    }
};


//Включение-отключение бликов
function onBlicks() {
    var blick = $("circle[style*='blick']");
    for (var i = 0; i < blick.length; i++) {
        if ($(blick[i]).attr('class') == undefined) $(blick[i]).attr('class', 'hiddenBlick');
        else $(blick[i]).removeAttr('class');
    }
}