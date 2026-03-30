    <x-layout>
        <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>
        <h3>Halo ini adalah halaman {{ $pageTitle }}</h3>

        <img style="width: 150px; height: 150px;" src="img/{{ $foto }}" alt="orang">
        <h4>Nama : {{ $nama }}</h4>
        <p>Email : {{ $email }}</p>
        <p>WA  : {{ $wa }}</p>
      </x-layout>