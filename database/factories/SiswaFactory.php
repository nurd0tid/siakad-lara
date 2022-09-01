<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Siswa::class;
    public function definition()
    {
        return [
            'nisn' => fake()->unique()->numerify('##########'),
            'nik' => fake()->unique()->numerify('################'),
            'rt_rw' => fake()->numerify('##/##'),
            'kd_pos' => fake()->numerify('#####'),
            'kab_kota' => fake()->city(),
            'kelurahan' => fake()->city(),
            'kecamatan' => fake()->city(),
            'provinsi' => fake()->city(),
            'jenis_tinggal' => 'Rumah Pribadi',
            'alat_transportasi' => 'Angkutan Umum',
            'nm_siswa' => fake()->name(),
            'jenkel' => fake()->randomElement(['Laki - Laki', 'Perempuan']),
            'tmpt_lahir' => fake()->address(),
            'tgl_lahir' => fake()->date(),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik', 'Khonghucu']),
            'almt_rumah' => fake()->address(),
            'telpon' => fake()->phoneNumber(),
            'no_hp' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'skhun' => '33',
            'penerima_kjp' => fake()->randomElement(['Ya', 'Tidak']),
            'foto' => 'https://source.unsplash.com/random',
            'angkatan' => '2014',
            'stts_awal' => 'Baru',
            'stts_siswa' => fake()->randomElement(['Active', 'Non Active']),
            'tingkat' => 'SLTA',
            'kd_kelas' => 'X.MIPA.1',
            'kd_jurusan' => 'MIPA',
            'nm_ayah' => fake()->name(),
            'tgl_lahir_ayah' => fake()->date(),
            'pendidikan_ayah' => '-',
            'pekerjaan_ayah' => '-',
            'penghasilan_ayah' => '-',
            'no_telp_ayah' => '-',
            'nm_ibu' => fake()->name(),
            'tgl_lahir_ibu' => fake()->date(),
            'pendidikan_ibu' => '-',
            'pekerjaan_ibu' => '-',
            'penghasilan_ibu' => '-',
            'no_telp_ibu' => '-',
            'nm_wali' => fake()->name(),
            'tgl_lahir_wali' => fake()->date(),
            'pendidikan_wali' => '-',
            'pekerjaan_wali' => '-',
            'penghasilan_wali' => '-',
            'no_telp_wali' => '-',
        ];
    }
}
