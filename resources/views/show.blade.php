@extends('layouts.website')
@section('title')
    post
@endsection
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('uploads/category/'.$book->image)}}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">{{ $book->bookGenre->name }}</span>
                        <h1 class="mb-4"><a href="#">{{ $book->name }} – {{ $book->writer->name }}</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section py-lg">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        <p class="text font-italic">{{ $book->name }}</p>
                        <p>ilk olarak nereden duyduğumu bir türlü hatırlayamıyorum ama bir şekilde okumak istediğim kitaplar arasına 
                            girmişti. Douglas Adams‘a ait bu kitabın kült bir eser olduğunu biliyordum, seveninin çok olduğunu da. 
                            Kitaplarda ya da filmlerde de yine karşıma çıkıyordu. O halde okuma zamanı gelmişti artık.Bu beş ciltli 
                            kitabı çoğu yerde Alfa Yayınları’na ait versiyonunu bulabilirsiniz.
                            Otostopçunun Galaksi Rehberi, ilk başlarda gözümde bir gezi kitabı gibi canlanmıştı, nedense!
                           Arthur Dent, basit bir yaşam süren bir dünyalı. Ford Prefect ise yıllar önce dünyada mahsur kalmış, başka gezegenden bir otostopçu. Daha doğrusu, Otostopçunun Galaksi Rehberi adlı rehber kitap için bilgi toplarken yolu dünyaya düşmüş. Bir gün, dünyanın yok edileceği bilgisini alan Ford, arkadaşı Arthur’u bu saldırıdan son dakika kurtarır, ve kendilerini bir uzay gemisinde bulurlar. Böylece Arthur’a oldukça yabancı gelen bir evrendeki maceraları başlamış olur.
                           Bu macera sırasında Arthur dünyanın asıl yaratılış nedenini öğrenecek, biz dünyalılar için önemli saydığımız birçok şeyin aslında önemsiz detaylar olduğunu, biz insanların birlikte yaşadığımız, hatta sevmediğimiz bazı canlılar için deney unsurları olduğumuzu öğrenecektir. Bu bilgiler Arthur’u oldukça şaşırtırken ilginç bir şekilde kendini bir anda evrenin nihai sorusunu ararken bulacaktır. İlginç bir şekilde diyorum, çünkü aslında cevabı belli olan ancak sorusu belli olmayan bu sorudan bahsediyoruz.</p>

                        <div class="row mb-5 mt-5">
                            <div class="col-md-12 mb-4">
                                <img src="{{asset('website')}}/images/img_3.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{asset('website')}}/images/img_4.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{asset('website')}}/images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                        @if ($book->id == true)
                        kitap adi: {{ $book->name }} <br>
                        türü ismi: {{ $book->BookGenre->name }} <br>
                        yazarin adi: {{ $book->writer->name }} <br>
                        <br>
                        <div class="pt-5">
                            <h3 class="mb-5">Comments</h3>
                            @foreach ($book->comments as $comment)
                            <ul class="comment-list">
                                <div class="vcard">
                                <h3>{{ $comment->user->name }}</h3>
                                </div>
                                <div class="comment-body">
                                    <div class="meta">{{ $comment->created_at->format('Y-m-d H:i:s') }}</div>
                                </div>
                                <li class="comment">
                                    <p>{{ $comment->description }}</p>


                            @if (Auth::check() && Auth::user()->id == $comment->user_id)
                            <div style="display: inline;">
                                <a href="/comments/{{ $comment->id }}/edit"> <em>Edit</em>  </a>
                                    <a href="/comments/{{ $comment->id }}/delete"> <em> Delete</em>  </a>
                                </div>
                            @endif
                        </li>
                    </ul>

                            @endforeach
                            <br><br><br>
                            <h6>
                                <a href="{{ route('yorumYap') }}">  <strong> Add comment? </strong> </a> 
                            </h6>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

