console.log('hi');

class Article {
    //avem 1 parametru
    title;
    
    constructor(title, description, category, user, image) {
        this.title = title;
        this.description = description;
        this.category = category;
        this.user = user;
        this.image = image;
    }
}



//identificam forma de creare;

/** @type {HTMLElement}  updateArticle*/
const updateArticle = document.getElementById('exampleModal'); 
console.log(updateArticle);

var popup = updateArticleForm.document.getElementsByClassName('.popup'); 

var button = document.getElementsByClassName('.button'); 


// $('.button').click(function(e) {
//     var coordinates = $(this).offset(); //Получаем координаты кликнутой кнопки
//     coordinates.top += $(this).height() / 2; // На высоте середины кнопки
//     coordinates.left += $(this).width() + 15; //Отодвигаем от кнопки на 15 пикселей
//     popup.offset(coordinates); //Устанавливаем координаты попапу
//     popup.fadeIn(800);
// });

