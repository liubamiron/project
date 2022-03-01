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

/** @type {HTMLFormElement}  updateArticleForm*/
const updateArticleForm = document.getElementById('updateArticleForm');

// defenim lista de date
if (updateArticleForm) {
    /** @type {HTMLInputElement}  titleInput*/
    const titleInput = updateArticleForm.querySelector('#titleInput');
    
    /** @type {HTMLTextAreaElement}  descriptionInput*/
    const descriptionInput = updateArticleForm.querySelector('#descriptionInput');
    
    /** @type {HTMLSelectElement}  categoryInput*/
    const categoryInput = updateArticleForm.querySelector('#categoryInput');

     /** @type {HTMLSelectElement}  userInput*/
     const userInput = updateArticleForm.querySelector('#userInput');
     

    /** @type {HTMLInputElement}  imageInput*/
    const imageInput = updateArticleForm.querySelector('#imageInput');

    /** @type {HTMLImageElement}  imagePreview*/
    const imagePreview = updateArticleForm.querySelector('#imagePreview');
    

    imageInput.onchange = (event) => {
        const file = imageInput.files[0];

        if (typeof file === 'undefined') {
            imagePreview.src = '';
            imagePreview.hidden = true
        } else {
            imagePreview.src = URL.createObjectURL(file);
            imagePreview.hidden = false;
        }
    }


     function validate() {

        let valid = true;

        //  check the title
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

          //check the select author
        // const userField = document.getElementById("userInput");
        // if (!userField.value) { 
        //     document.querySelector('label[for="userInput"]').innerHTML += ' <span class="validation-error">Choose an author</span>';
        //     valid = false;
        //  }

        //   check the select category
        // const categoryField = document.getElementById("categoryInput");
        // if (categoryField.value === 'Select any categories from list') { 
        // // if (!categoryField.value) { // if is empty
        //     document.querySelector('label[for="categoryInput"]').innerHTML += ' <span class="validation-error" style="color:red">category is required</span>';
        //     valid = false;
        //  }

          // check the image
        const imageField = document.getElementById("imageInput");
        if (!imageField.value) { // if is empty
            document.querySelector('label[for="imageInput"]').innerHTML += ' <span class="validation-error" style="color:red">Upload image required</span>';
            valid = false;
         }
     }

    const form = document.getElementById('updateArticleForm');

    form.addEventListener('submit', validate);


    


    updateArticleForm.onsubmit = (event) => {
        event.preventDefault();

       
        //prepare data for send

        const article = new Article(titleInput.value, descriptionInput.value, categoryInput.value,
                userInput.value, imageInput.files[0] ) // constanta article, si ca parametru transmitem date din forma

        const formData = new FormData();
        formData.append('title', article.title)
        formData.append('description', article.description)
        formData.append('category', article.category)
        formData.append('user', article.user)
        formData.append('image', article.image)

        //process server response with succes or error  //aruncam date la server
        var path = window.location.pathname.split("/");
        var id = path[path.length - 1];
        var url = '/api/articles/' + id;
        
        axios.post(url, formData)
        .then(response => {
                console.log(response);
            })
            .catch(error => {
                console.error(error)
            })
    }
}