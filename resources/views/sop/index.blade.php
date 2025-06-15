@extends('layout.main')

@section('title', 'SOP Penyiapan Amanat')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-900 via-indigo-800 to-purple-700 py-16 px-4 text-white">
        <div class="max-w-3xl mx-auto bg-white text-black p-10 rounded-xl shadow-lg">
            <h1 class="text-2xl font-bold mb-4 text-center text-indigo-700">SOP Penyiapan Amanat</h1>

            <ol class="list-decimal list-inside space-y-2 text-justify">
                <li>Masuk ke sistem menggunakan akun yang telah diberikan.</li>
                <li>Pilih menu <strong>Form Amanat</strong> di sidebar.</li>
                <li>Isi data amanat sesuai kebutuhan (pengirim, isi surat, tujuan disposisi, dll).</li>
                <li>Upload dokumen yang diperlukan (jika ada).</li>
                <li>Klik tombol <strong>Kirim</strong> untuk meneruskan ke bagian terkait.</li>
            </ol>

            <div class="mt-6">
                <p>Untuk panduan lengkap dan format dokumen, kunjungi tautan berikut:</p>
                <a href="https://contoh-url-sop.go.id/amanat" target="_blank" rel="noopener noreferrer"
                    class="text-indigo-600 hover:underline">
                    https://referensi-sop-amanat.go.id/amanat
                </a>
            </div>
        </div>
    </div>
@endsection
