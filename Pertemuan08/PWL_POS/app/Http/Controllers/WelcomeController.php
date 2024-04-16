<?php

namespace App\Http\Controllers;

use App\Charts\MemberCharts;
use App\Exports\UserExport;
use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
class WelcomeController extends Controller
{
    public function index(MemberCharts $chart)
                {
                    $breadcrumb = (object) [
                        'title' => 'Dashboard Member',
                        'list' => ['Home' ]
                    ];

                    $page = (object) [
                        'title' => 'Berikut Daftar Member Pelanggan yang terdaftar di sistem'
                    ];

                    $activeMenu = 'dashboard'; // set menu yang sedang aktif

                    return view('Welcome', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'chart'=> $chart->build()]);
                }
                

                //Ambil data user dalam bentuk json untuk datatables
                public function list(Request $request)
                {
                    // $users = userModel::select('level', 'level_nama', 'member')->with('level');
                    $users = userModel::with('level')->whereRelation('level', 'level_nama', 'Member');

                    // Filter data user berdasarkan level_id
                    if ($request->level_id) {
                        $users->where('level_id', $request->level_id);
                    }

                    return DataTables::of($users)
                    ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
                    ->addColumn('aksi', function ($user) { // menambahkan kolom aksi
                        $btn = '<a href="'.url('/welcome/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
                        $btn .= '<a href="'.url('/welcome/' . $user->user_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                        $btn .= '<form class="d-inline-block" method="POST" action="'. url('/welcome/'.$user->user_id).'">'
                            . csrf_field() . method_field('DELETE') . 
                            '<button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\');">Hapus</button></form>'; 
                        return $btn;
                    })
                    ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
                    ->make(true);
                }

                public function exportExcel()
                {
                return Excel::download(new UserExport, 'Data_Member_PWL_POS.xlsx');
                }

                
                // Menampilkan halaman form tambah user
                public function create()
                {
                    $breadcrumb = (object) [
                        'title' => 'Tambah User',
                        'list' => ['Home', 'User', 'Tambah'],
                    ];

                    $page = (object) [
                        'title' => 'Tambah user baru'
                    ];

                    $activeMenu = 'user'; // set menu yang sedang aktif
                    
                    $level = LevelModel::all(); // ambil data level untuk ditampilkan di form
                    

                    return view('user.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
                }

                //Menyimpan data user baru
                public function store(Request $request)
                {
                    $request->validate([
                        //username harus diisi, berupa string, minimal 3 karakter, dan bernilai unik di tabel m_user kolom username
                        'username' => 'required|string|min:3|unique:m_user,username',
                        'nama' => 'required|string|max:100',    //nama harus diisi, berupa string dan maksimal 100 karakter
                        'password' => 'required|min:5',         //password harus diisi dan minimal 5 karakter
                        'level_id' => 'required|integer',       //level_id harus diisi dan berupa angka
                    ]);
            
                    UserModel::create([
                        'username' => $request->username,
                        'nama' => $request->nama,
                        'password' => bcrypt($request->password), //password dienkripsi sebelum disimpan
                        'level_id' => $request->level_id,
                    ]);
            
                    return redirect('/user')->with('success', 'Data user berhasil disimpan');
                }

                //Menampilkan detail user
                public function show(string $id)
                {
                    $user = userModel::with('level')->find($id);
            
                    $breadcrumb = (object) [
                        'title' => 'Detail User Member',
                        'list' => ['Home', 'User', 'Detail']
                    ];
            
                    $page = (object) [
                        'title' => 'Berikut Detail dari user member pelanggan'
                    ];
            
                    $activeMenu = 'dashboard'; //set menu yang sedang aktif
            
                    return view('member.show', [
                        'breadcrumb' => $breadcrumb, 
                        'page' => $page,
                        'user' => $user,
                        'activeMenu' => $activeMenu
                    ]);
                }

                //Menampilkan halaman form edit user
                public function edit(string $id)
                {
                    $user = UserModel::find($id);
            
                    $breadcrumb = (object) [
                        'title' => 'Edit User Member',
                        'list' => ['Home', 'user', 'Edit']
                    ];
            
                    $page = (object) [
                        'title' => 'Edit User Member Pelanggan',
                    ];
            
                    $activeMenu = 'dashboard'; // set menu yang sedang aktif
            
                    return view('member.edit', [
                        'breadcrumb' => $breadcrumb, 
                        'page' => $page,
                        'user' => $user,
                        'activeMenu' => $activeMenu
                    ]);
                }

                //Menyimpan perubahan data user
                public function update(Request $request, string $id)
                {
                    
                    $request->validate([
                        //username harus diisi, berupa string minimal 3 karakter,
                        // dan bernilai unik di tabel m_user kolom username kecuali untuk user dengan id yang sedang diedit
                        'username' => 'required|string|min:3|unique:m_user,username,'.$id.',user_id',
                        'nama' => 'required|string|max:100',    //nama harus diiisi berupa string dan maksimal 100 karakter
                        'password' => 'nullable|min:5',         //password bisa diisi (minimall 5 karakter) dan bisa tidak diisi
                        'status' => 'required',       
                    ]);
                    
                    UserModel::find($id)->update([
                        'username' => $request->username,
                        'nama' => $request->nama,
                        'password' => $request->password ? bcrypt($request->password) : userModel::find($id)->password,
                        'status' => $request->status,
                    ]);
            
                    return redirect('/welcome')->with('success', 'Data Member Pelanggan berhasil diubah');
                }

                //Menghapus data user
                public function destroy(string $id)
                {
                    $check = UserModel::find($id);

                if(!$check){    //Untuk mengecek apakah data member dengan id yang dimaksud ada atau tidak
                return redirect('/welcome')->with('error', 'Data Member Pelanggan tidak ditemukan');
                }

                try {
                UserModel::destroy($id);    //Hapus data level

                return redirect('/welcome')->with('success', 'Data Member Pelanggan berhasil dihapus');
                } catch (\Illuminate\Database\QueryException $e) {
                
                    //Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
                return redirect('/welcome')->with('/error', 'Data Member Pelanggan gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
                }
            }
        }
