/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/blog/js/create-article.js":
/*!*********************************************!*\
  !*** ./resources/blog/js/create-article.js ***!
  \*********************************************/
/***/ (() => {

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var Article = /*#__PURE__*/_createClass( //avem 5 parametri
function Article(title, description, category, user, image) {
  _classCallCheck(this, Article);

  _defineProperty(this, "title", void 0);

  _defineProperty(this, "description", void 0);

  _defineProperty(this, "category", void 0);

  _defineProperty(this, "user", void 0);

  _defineProperty(this, "image", void 0);

  this.title = title;
  this.description = description;
  this.category = category;
  this.user = user;
  this.image = image;
}); //identificam forma de creare;

/** @type {HTMLFormElement}  createArticleForm*/


var createArticleForm = document.getElementById('createArticleForm'); // defenim lista de date

if (createArticleForm) {
  //validate data before submit
  //  function validate() {
  //     var x=document.forms['form']['title'].value;
  //     if (x.length === 0){
  //         document.getElementById('titlef').innerHTML='required';
  //         return false;
  //      }
  //  }
  var validate = function validate() {
    var valid = true; // check the title

    var userField = document.getElementById("titleInput");

    if (!userField.value) {
      // if is empty
      document.querySelector('label[for="titleInput"]').innerHTML += ' <span class="validation-error" style="color:red">Title is required</span>';
      valid = false;
    } // check the description 


    var descriptionField = document.getElementById("descriptionInput");

    if (!descriptionField.value) {
      // if is empty
      document.querySelector('label[for="descriptionInput"]').innerHTML += ' <span class="validation-error" style="color:red">Where is the description ?</span>';
      valid = false;
    } //   //check the select author
    // const userField = document.getElementById("userInput");
    // if (!userField.value) { // if is empty
    //     document.querySelector('label[for="userInput"]').innerHTML += ' <span class="validation-error">Choose an author</span>';
    //     valid = false;
    //  }
    // check the select category


    var categoryField = document.getElementById("categoryInput");

    if (categoryField.value === 'Select any categories from list') {
      // if (!categoryField.value) { // if is empty
      document.querySelector('label[for="categoryInput"]').innerHTML += ' <span class="validation-error" style="color:red">category is required</span>';
      valid = false;
    } // check the image


    var imageField = document.getElementById("imageInput");

    if (!imageField.value) {
      // if is empty
      document.querySelector('label[for="imageInput"]').innerHTML += ' <span class="validation-error" style="color:red">Upload image required</span>';
      valid = false;
    }
  };

  /** @type {HTMLInputElement}  titleInput*/
  var titleInput = createArticleForm.querySelector('#titleInput');
  /** @type {HTMLTextAreaElement}  descriptionInput*/

  var descriptionInput = createArticleForm.querySelector('#descriptionInput');
  /** @type {HTMLSelectElement}  categoryInput*/

  var categoryInput = createArticleForm.querySelector('#categoryInput');
  /** @type {HTMLSelectElement}  userInput*/

  var userInput = createArticleForm.querySelector('#userInput');
  /** @type {HTMLInputElement}  imageInput*/

  var imageInput = createArticleForm.querySelector('#imageInput'); //console.log(imageInput);

  /** @type {HTMLImageElement}  imagePreview*/

  var imagePreview = createArticleForm.querySelector('#imagePreview');

  imageInput.onchange = function (event) {
    //console.log(imageInput.files[0]);
    var file = imageInput.files[0]; //console.log(file);
    //console.log(event);

    if (typeof file === 'undefined') {
      imagePreview.src = '';
      imagePreview.hidden = true;
    } else {
      imagePreview.src = URL.createObjectURL(file);
      imagePreview.hidden = false;
    }
  };

  var form = document.getElementById('createArticleForm');
  form.addEventListener('submit', validate);

  createArticleForm.onsubmit = function (event) {
    event.preventDefault(); //prepare data for send

    var article = new Article(titleInput.value, descriptionInput.value, categoryInput.value, userInput.value, imageInput.files[0]); // constanta article, si ca parametru transmitem date din forma

    var formData = new FormData();
    formData.append('title', article.title);
    formData.append('description', article.description);
    formData.append('category', article.category);
    formData.append('user', article.user);
    formData.append('image', article.image); //process server response with succes or error  //aruncam date la server

    axios.post('/api/articles/', formData).then(function (response) {
      console.log(response);
    })["catch"](function (error) {
      console.error(error);
    });
  };
}

/***/ }),

/***/ "./resources/blog/js/most-popular.js":
/*!*******************************************!*\
  !*** ./resources/blog/js/most-popular.js ***!
  \*******************************************/
/***/ (() => {

var populatArticleTemplate = document.querySelector('[popular-article-template]');
var listOfArticles = document.querySelector('[articles-list]');
axios.get('/api/articles/most-popular').then(function (_ref) {
  var data = _ref.data;
  //console.log(data);
  data.forEach(function (articleItem) {
    var article = populatArticleTemplate.content.cloneNode(true).children[0]; // article.querySelector('[data-title]').textContent = articleItem.title;

    var artcleTitle = article.querySelector('[data-title]');
    var titleLink = document.createElement('a');
    titleLink.href = "blog/article/".concat(articleItem.id);
    titleLink.textContent = articleItem.title;
    artcleTitle.append(titleLink); //titleLink.href = 'blog/article/' + articleItem.id;
    //     article.querySelector('[data-title]').addEventListener('click', function() {
    //       location.href = 'blog/article/' + articleItem.id
    //   }, false);

    article.querySelector('[data-excerpt]').textContent = articleItem.excerpt; // article.querySelector('[data-image]').textContent = articleItem.image_url;
    // article.querySelector('[data-image]').innerHTML = articleItem.image_url;
    // article.querySelector('[data-image]').innerHTML = `url(${articleItem.image_url})`;

    article.querySelector('[data-image]').style.backgroundImage = "url(".concat(articleItem.image_url, ")"); // article.children[0].style.backgroundImage = "url("storage/app/public" + articleItem.image_url + ")";

    var counterElement = article.querySelector('[data-views-counter]');
    counterElement.innerHTML = "\n        ".concat(articleItem.view_count, "\n        <span class=\"visually-hidden\">unread messages</span>");

    if (!articleItem.view_count) {
      counterElement.hidden = true;
    }

    listOfArticles.append(article);
  });
}); // function myFunction(id) {
//     location.href = '/article/'+ id;
//   }

/***/ }),

/***/ "./resources/blog/js/update-article.js":
/*!*********************************************!*\
  !*** ./resources/blog/js/update-article.js ***!
  \*********************************************/
/***/ (() => {

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

console.log('hi');

var Article = /*#__PURE__*/_createClass( //avem 1 parametru
function Article(title, description, category, user, image) {
  _classCallCheck(this, Article);

  _defineProperty(this, "title", void 0);

  this.title = title;
  this.description = description;
  this.category = category;
  this.user = user;
  this.image = image;
}); //identificam forma de creare;

/** @type {HTMLElement}  updateArticle*/


var updateArticle = document.getElementById('exampleModal');
console.log(updateArticle);
var popup = updateArticleForm.document.getElementsByClassName('.popup');
var button = document.getElementsByClassName('.button'); // $('.button').click(function(e) {
//     var coordinates = $(this).offset(); //Получаем координаты кликнутой кнопки
//     coordinates.top += $(this).height() / 2; // На высоте середины кнопки
//     coordinates.left += $(this).width() + 15; //Отодвигаем от кнопки на 15 пикселей
//     popup.offset(coordinates); //Устанавливаем координаты попапу
//     popup.fadeIn(800);
// });

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!***********************************!*\
  !*** ./resources/blog/js/blog.js ***!
  \***********************************/
__webpack_require__(/*! ./most-popular */ "./resources/blog/js/most-popular.js");

__webpack_require__(/*! ./create-article */ "./resources/blog/js/create-article.js");

__webpack_require__(/*! ./update-article */ "./resources/blog/js/update-article.js");
})();

/******/ })()
;