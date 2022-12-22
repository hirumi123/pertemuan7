@include('layouts.app')

<div class="container">
    <div class="card-body">
        <div class="row justify-content-center">

            <div class="col-md-6">
                @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                        {{session('status')}}
                    </div>
                @endif       
                    <div class="card mt-3">
                    <div class="card-body md-6">
                    <h3 class="md-2">Kirim email</h3>
                    <hr class="line">
                        <form action="{{ route('post-email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Pengirim</label><br>
                                <input type="text" class="form-input" name="name" id="name" placeholder="Nama">
                            </div>
                            <div class="form-group my-3">
                                <label for="email" >Email Tujuan</label><br>
                                <input type="text" class="form-input" name="email" id="email" placeholder="Email Tujuan">
                            </div>
                            <div class="form-group my3">
                                <label for="name">Deskripsi</label><br>
                                <textarea name="body" id="" cols="50" rows="10">
                                    
                                </textarea>
                                
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Kirim Email</button>
                            </div>
                        </form>

                
            </div>
                    </div>
                    
        </div>
    </div>
</div>
