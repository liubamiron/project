const populatArticleTemplate = document.querySelector('[popular-article-template]');
const listOfArticles = document.querySelector('[articles-list]')


axios.get('/api/articles/most-popular').then(({ data }) => {
    //console.log(data);
    data.forEach((articleItem) => {
        const article = populatArticleTemplate.content.cloneNode(true).children[0];
        // article.querySelector('[data-title]').textContent = articleItem.title;

        let artcleTitle = article.querySelector('[data-title]');
        const titleLink = document.createElement('a');
        titleLink.href = `blog/article/${articleItem.id}`;
        titleLink.textContent = articleItem.title;
        artcleTitle.append(titleLink);

        //titleLink.href = 'blog/article/' + articleItem.id;


        //     article.querySelector('[data-title]').addEventListener('click', function() {
        //       location.href = 'blog/article/' + articleItem.id
        //   }, false);



        article.querySelector('[data-excerpt]').textContent = articleItem.excerpt;

        // article.querySelector('[data-image]').textContent = articleItem.image_url;
        // article.querySelector('[data-image]').innerHTML = articleItem.image_url;


        // article.querySelector('[data-image]').innerHTML = `url(${articleItem.image_url})`;

        article.querySelector('[data-image]').style.backgroundImage = `url(${articleItem.image_url})`;


        // article.children[0].style.backgroundImage = "url("storage/app/public" + articleItem.image_url + ")";

        const counterElement = article.querySelector('[data-views-counter]')
        counterElement.innerHTML = `
        ${articleItem.view_count}
        <span class="visually-hidden">unread messages</span>`;

        if (!articleItem.view_count) {
            counterElement.hidden = true;

        }
        listOfArticles.append(article)
    })

})

// function myFunction(id) {
//     location.href = '/article/'+ id;
//   }