@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="mt-4" style="width: 80rem">
                <ul>
                    <h6></h6>
                    <h1>{{$post->title}}</h1>
                    <img src={{$post->image}} class="card-img-top" alt="image"></a>
                    <h6>posted by <b>{{$post->user->name}}</b> in group <b>{{$post->group->name}}</b></h6>
                    <h3>{{$post->contents}}</h3>
                </ul>
                <div class="row">
                    <div class="cold-md-8 col-md-offset2" id="root">
                        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
                        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                        <div class="card" >
                            <div class="card-header">
                                <b>Comments: </b>
                            </div>
                            <div class="card-body" v-for="comment in comments">
                                <b>@{{ comment.user.name}} commented: </b> @{{ comment.contents}}
                            </div>

                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                <b>Leave a comment:</b>
                            </div>
                            <div class="card-body">
                                <textarea name="comment" class="form-control" placeholder="Leave a comment" v-model="commentBox"></textarea>
                                <button @click="addComment" type="submit" class="form-control bg-secondary">Post Comment</button>
                            </div>
                        </div>

                    <script>
                        Vue.config.devtools = true;
                        var app = new Vue({
                            el: '#root',
                            data: {
                                comment: "",
                                comments: {},
                                commentBox: '',
                                post: {!! $post->toJson() !!},
                                user: {!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
                            },
                            mounted() {
                                this.getComments();
                            },
                            methods: {
                                getComments() {
                                    axios.get(`/api/posts/${this.post.id}/comments`)
                                    .then((response) => {
                                        this.comments = response.data
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    });
                                },
                                addComment() {
                                    axios.post(`/api/posts/${this.post.id}/comment`, {
                                        api_token: this.user.api_token,
                                        contents: this.commentBox,
                                        user_id: this.user.id
                                    })
                                    .then((response) => {
                                        this.comments.unshift(response.data);
                                        this.commentBox = '';
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    });
                                }
                            }
                            });

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="card mt-4 " style="width: 30rem">
            <div class="card-header">
                Post Details
            </div>
            <dl class="dl-horizontal text-center">
                <dt>Created At:</dt>
                <dd>{{ date( 'M j, Y H:i', strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal text-center">
                <dt>Updated At:</dt>
                <dd>{{ date( 'M j, Y H:i', strtotime($post->updated_at)) }}</dd>
            </dl>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="form-control bg-warning text-center">Edit Post</a>
                    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}

                        <button type="submit" class="form-control bg-danger text-center mb-3">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
