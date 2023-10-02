@extends('layouts.main')

@section('container')
    <ul>
        @foreach($posts as $post)
        <li class="flex flex-row p-1 justify-between bg-slate-100 rounded-3xl mb-3">
            <div class="my-2 mx-4">
                <div class="flex flex-row">
                <img class="w-10 mr-4" src="{{ asset('storage/'.$post->maskapai->images_path) }}" alt="" />
                    <h3 class="text-base">{{ $post->maskapai->nama_maskapai }}</h3>
                </div>
                <div class="flex flex-row bg-slate-300 rounded-xl w-fit items-center px-2 py-0.5 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>
                    <p class="ml-2 text-xs">{{ $post->bagasi }}</p>
                </div>
            </div>
            <div class="my-2 mx-4">
                <div class="flex flex-row items-center">
                    <div class="text-center">
                        <h5 class="text-lg">{{ \Carbon\Carbon::parse($post->rute->keberangkatan)->hour }}.{{ \Carbon\Carbon::parse($post->rute->keberangkatan)->minute }}</h5>
                        <p class="text-sm text-gray-500">{{ $post->rute->bandara_asal->kode }}</p>
                    </div>

                    <div class="text-center items-center justify-center content-center">
                        <h5 class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($post->rute->durasi_penerbangan)->hour }}j {{ \Carbon\Carbon::parse($post->rute->durasi_penerbangan)->minute }}m</h5>
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <circle cx="6" cy="6" r="6" fill="#58A7FF" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="2" viewBox="0 0 101 2"
                                fill="none">
                                <path d="M1 1H100" stroke="#58A7FF" stroke-linecap="round" stroke-dasharray="4 4" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <circle cx="6" cy="6" r="6" fill="#58A7FF" />
                            </svg>
                        </div>
                        <p class="text-xs text-gray-500">Langsung</p>
                    </div>

                    <div class="text-center">
                        <h5>{{ \Carbon\Carbon::parse($post->rute->kedatangan)->hour }}.{{ \Carbon\Carbon::parse($post->rute->kedatangan)->minute }}</h5>
                        <p class="text-sm text-gray-500">{{ $post->rute->bandara_tujuan->kode }}</p>
                    </div>
                </div>
            </div>
            <div class="my-2 mx-4">
                <div class="text-right">
                    <p class="flex items-center">
                        <span class="text-xs text-gray-500 items-start self-start">Rp</span>
                        <span class="text-base text-orange-600">{{ number_format($post->harga, 0, ',', '.') }}</span>
                        <span class="text-xs text-gray-500 self-end">/org</span>
                    </p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
@endsection
