<script src="{{ asset('assets/public/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/public/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/public/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        /* When click show user */
        $('body').on('click', '#show-user', function() {
            var userURL = $(this).data('url');
            $.get(userURL, function(data) {
                $('#userShowModal').modal('show');
                $('#user-id').text(data.id);
                $('#user-name').text(data.name);
                $('#user-email').text(data.email);
            })
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $.ajax({
            type: 'GET',
            url: '/post-terbaru',
            success: function(data) {
                //append to table
                if (data.post) {
                    data.post.forEach(function(item, index) {
                        $("#new-article").append(createTr(item));
                    });
                }
            },
            error: function(data) {}
        });



        function createTr(item) {
            var tr = 
            '<a href="/isi-post/' + item.slug +'" class="list-group-item list-group-item-action flex-column align-items-start">' +
               '<div class="w-100 justify-content-between">' +
                    '<img src="/'+ item.image_cover +'" alt="" class="img-fluid float-left">' +
                    '<h5 class="mb-1">' + item.title + '</h5>' +
                    '<small>' + item.date + '</small>' +
               '</div>' +
            '</a>'

            return tr;
        }

    });
</script>

<script type="text/javascript">
     $(document).ready(function() {
 
         $.ajax({
             type: 'GET',
             url: '/post-populer',
             success: function(data) {
                 //append to table
                 if (data.post) {
                     data.post.forEach(function(item, index) {
                         $("#populer-article").append(createTr(item));
                     });
                 }
             },
             error: function(data) {}
         });
 
 
 
         function createTr(item) {
             var tr = 
             '<a href="/isi-post/' + item.slug +'" class="list-group-item list-group-item-action flex-column align-items-start">' +
                '<div class="w-100 justify-content-between">' +
                     '<img src="/'+ item.image_cover +'" alt="" class="img-fluid float-left">' +
                     '<h5 class="mb-1">' + item.title + '</h5>' +
                '</div>' +
             '</a>'
 
             return tr;
         }
 
     });
 </script>
<script type="text/javascript">
     $(document).ready(function() {
 
         $.ajax({
             type: 'GET',
             url: '/category_footer',
             success: function(data) {
                 //append to table
                 if (data.category) {
                     data.category.forEach(function(item, index) {
                         $("#category-footer").append(createTr(item));
                     });
                 }
             },
             error: function(data) {}
         });
 
 
 
         function createTr(item) {
             var tr = 
             '<li>' +
               '<a href="/category/' + item.name + '/list-post" id="category-1">' + item.name + '<span>' + item.articles_count + '</span> </a>' +
             '</li>'

             return tr;
         }
 
     });
 </script>