<div class="rounded p-3 mb-3 {{($post->user->sex == 'Male') ? 'male' : 'female'}}">
    <div class="post pb-2">
        <div class="float-right">
            <button class="btn nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fad fa-list-ul"></i> {{$post->category->category}}
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach(App\Models\User::getUserByCat($post->category) as $user)
                    <a class="dropdown-item" href="{{url("/authors/$user->id")}}">{{$user->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="post-user py-2">
            <h6>
            <img src="{{$post->user->sex =='Male' ? asset('images/male-icon-blue.png') : asset('images/female-icon-pink.png')}}" class="rounded-circle mb-1" alt="" style="width: 30px;">
            <a href="{{url('authors/'.$post->user_id)}}"class="">{{$post->user->name}}</a>
            </h6>
            <span class="text-dark mt-2" style="font-size: 0.9em; font-weight:500">{{date('M d, Y h:i A', strtotime($post->created_at))}}</span>
        </div>
        <p class="post-text bg-white p-3 rounded">{{$post->post}}</p>
    </div>
</div>