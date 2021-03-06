@extends('modules.services.index')
@section('title') Lavado y Limpieza @endsection
@section('contentServices')
<h2 class="mb-3 mt-5">Lavado y Limpieza</h2>
    <p><img src="images/services/work20.jpeg" alt="" class="img-fluid"></p>
    <h2 class="mb-3">It is a long established fact a reader be distracted</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
    <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>   
        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Solicitar Servicio de Limpieza</h3>
            <form action="#" class="p-5 bg-light">
                <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

            </form>
        </div>
@endsection