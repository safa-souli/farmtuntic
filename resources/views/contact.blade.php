@extends('layout')

@section('content')

    <section id="content" class="page-content">

        <section class="contact-form section-padding banner-bottom-sec">
            <div style="box-shadow: 0 0 0 1px rgb(67 41 163 / 8%), 0 1px 5px 0 rgb(67 41 163 / 8%);  margin: 0 3in 0 3in;">
            <center style="margin-top: 0%">
                <img src='{{ URL::asset('assets\img\logo\logo3.png') }}' alt="">
            </center>
            <form action="contact" method="post" enctype="multipart/form-data">
                @csrf
                <section class="col-md-12 form-fields" style="padding: 1cm">
                    <div class="form-group row">
                        <div class="col-md-12 col-md-offset-3">
                            <h3>Contactez-nous</h3>
                            <p>Partager avec nous vos options ou vos suggestions nous aidera à progresser.</p>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            Merci pour votre opinion we will answer you! it will help us
                        </div>
                    @endif
                    @if (session('errors'))                        
                      <div class="alert alert-danger" role="alert">
                          <strong>Whoops!! {{ session('errors')->first('mail') }}: </strong> Something went wrong please check the email validity
                          so we can answer you
                      </div>
                    @endif
                    <hr style="margin-top:-1ch 0 3ch">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Objet</label>
                        <div class="col-md-6">
                            <select name="subject" class="form-control form-control-select">
                                <option value="O">Opinion</option>
                                <option value="S">Suggestion</option>
                                <option value="A">Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Email address</label>
                        <div class="col-md-6">
                            <input class="form-control" name="email" type="email" placeholder="vos@email.com">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pièce jointe
                            <span class="form-control-comment">
                                (optionel)
                            </span></label>
                        <div class="col-md-6">
                            <input type="file" name="fileUpload" class="filestyle" data-buttontext="Choisir le fichier"
                                id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                            <div class="bootstrap-filestyle input-group">
                                <input type="text" class="form-control " placeholder="" disabled="">
                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                    <label for="filestyle-0" class="btn btn-default ">
                                        <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                        <span class="buttonText">Choisir le fichier</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Message</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="message" placeholder="Comment pouvons nous aider?"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <footer class="text-sm-right">
                        <input type="hidden" name="token" value="2699eab29c6b0741fb5e170320633008">
                        <input type="hidden" name="client_id" value={{ Auth::user()->id ?? null }}>
                        <input class="btn-second btn-submit" type="submit" name="submitMessage" value="Envoyer"
                            style="margin-top: 3ch">
                    </footer>
                </section>

            </form>
            </div>
        </section>

    </section>

@endsection
