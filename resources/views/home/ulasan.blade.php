@extends('layout.home')

@section('title', 'ulasan')

@section('content')
    <section style="max-width: 600px; margin: 0 auto;">
        <h2 style="text-align: center;">Form Testimoni</h2>
        <form action="{{ route('proses_input_testimoni') }}" method="post" enctype="multipart/form-data" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="nama_testimoni" style="display: block;">Nama Testimoni :</label>
                <input type="text" id="nama_testimoni" name="nama_testimoni" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;" placeholder="Masukan nama barang">
            </div>
            
            <div style="margin-bottom: 10px;">
                <label for="deskripsi" style="display: block;">Deskripsi :</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;"></textarea>
            </div>
            
            <div style="margin-bottom: 10px;">
                <label for="gambar" style="display: block;">Gambar Produk :</label>
                <input type="file" id="gambar" name="gambar" style="border: none;">
            </div>
            
            <div style="text-align: center;">
                <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
            </div>
        </form>
    </section>
@endsection
