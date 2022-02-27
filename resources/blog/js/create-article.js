class Article {
    //avem 5 parametri
    title;
    description;
    category;
    user;
    image;
    constructor(title, description, category, user, image) {
        this.title = title;
        this.description = description;
        this.category = category;
        this.user = user;
        this.image = image;
    }
}



//identificam forma de creare;

/** @type {HTMLFormElement}  createArticleForm*/
const createArticleForm = document.getElementById('createArticleForm');

// defenim lista de date
if (createArticleForm) {
    /** @type {HTMLInputElement}  titleInput*/
    const titleInput = createArticleForm.querySelector('#titleInput');
    
    /** @type {HTMLTextAreaElement}  descriptionInput*/
    const descriptionInput = createArticleForm.querySelector('#descriptionInput');
    
    /** @type {HTMLSelectElement}  categoryInput*/
    const categoryInput = createArticleForm.querySelector('#categoryInput');

     /** @type {HTMLSelectElement}  userInput*/
     const userInput = createArticleForm.querySelector('#userInput');
     

    /** @type {HTMLInputElement}  imageInput*/
    const imageInput = createArticleForm.querySelector('#imageInput');
    //console.log(imageInput);

    /** @type {HTMLImageElement}  imagePreview*/
    const imagePreview = createArticleForm.querySelector('#imagePreview');
    

    imageInput.onchange = (event) => {
        //console.log(imageInput.files[0]);
        const file = imageInput.files[0];
        //console.log(file);
        //console.log(event);

        if (typeof file === 'undefined') {
            imagePreview.src = '';
            imagePreview.hidden = true
        } else {
            imagePreview.src = URL.createObjectURL(file);
            imagePreview.hidden = false;
        }
    }

     //validate data before submit

    //  function validate() {
    //     var x=document.forms['form']['title'].value;

    //     if (x.length === 0){
    //         document.getElementById('titlef').innerHTML='required';
    //         return false;
    //      }
    //  }

     function validate() {

        let valid = true;

         // check the title
         const userField = document.getElementById("titleInput");
        if (!userField.value) { // if is empty
            document.querySelector('label[for="titleInput"]').innerHTML += ' <span class="validation-error" style="color:red">Title is required</span>';
            valid = false;
        }

        // check the description 
        const descriptionField = document.getElementById("descriptionInput");
        if (!descriptionField.value) { // if is empty
            document.querySelector('label[for="descriptionInput"]').innerHTML += ' <span class="validation-error" style="color:red">Where is the description ?</span>';
            valid = false;
         }

        //   //check the select author
        // const userField = document.getElementById("userInput");
        // if (!userField.value) { // if is empty
        //     document.querySelector('label[for="userInput"]').innerHTML += ' <span class="validation-error">Choose an author</span>';
        //     valid = false;
        //  }

          // check the select category
        const categoryField = document.getElementById("categoryInput");
        if (categoryField.value === 'Select any categories from list') { 
        // if (!categoryField.value) { // if is empty
            document.querySelector('label[for="categoryInput"]').innerHTML += ' <span class="validation-error" style="color:red">category is required</span>';
            valid = false;
         }

          // check the image
        const imageField = document.getElementById("imageInput");
        if (!imageField.value) { // if is empty
            document.querySelector('label[for="imageInput"]').innerHTML += ' <span class="validation-error" style="color:red">Upload image required</span>';
            valid = false;
         }
     }

    const form = document.getElementById('createArticleForm');

    form.addEventListener('submit', validate);


    


    createArticleForm.onsubmit = (event) => {
        event.preventDefault();

       
        //prepare data for send

        const article = new Article(titleInput.value, descriptionInput.value, categoryInput.value,
                userInput.value, imageInput.files[0]) // constanta article, si ca parametru transmitem date din forma

        const formData = new FormData();
        formData.append('title', article.title)
        formData.append('description', article.description)
        formData.append('category', article.category)
        formData.append('user', article.user)
        formData.append('image', article.image)

        //process server response with succes or error  //aruncam date la server
        axios.post('/api/articles/', formData)
        .then(response => {
                console.log(response);
            })
            .catch(error => {
                console.error(error)
            })
    }
}