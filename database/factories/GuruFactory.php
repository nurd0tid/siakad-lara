<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Guru::class;
    public function definition()
    {
        return [
            'nip' => fake()->unique()->numerify('##################'),
            'nik' => fake()->unique()->numerify('################'),
            'nm_guru' => fake()->name(),
            'jenkel' => fake()->randomElement(['Laki - Laki', 'Perempuan']),
            'tmpt_lahir' => fake()->address(),
            'tgl_lahir' => fake()->date(),
            'almt_jalan' => fake()->address(),
            'rt_rw' => fake()->unique()->numerify('##/##'),
            'kab_kota' => fake()->city(),
            'kelurahan' => fake()->city(),
            'kecamatan' => fake()->city(),
            'provinsi' => fake()->city(),
            'kd_pos' => fake()->unique()->numerify('#####'),
            'no_telp' => fake()->phoneNumber(),
            'no_hp' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik', 'Khonghucu']),
            'niy_nigk' => fake()->unique()->numerify('#########'),
            'nuptk' => fake()->unique()->numerify('########'),
            'id_kepegawaian' => '1',
            'id_ptk' => '1',
            'pengawas_bidang_studi' => 'Matematika',
            'stts_guru' => fake()->randomElement(['Active', 'Non Active']),
            'sk_cpns' =>  fake()->unique()->numerify('########'),
            'tgl_cpns' =>  fake()->date(),
            'sk_pengangkatan' => fake()->unique()->numerify('##-####-##'),
            'tmt_pengangkatan' => fake()->date(),
            'lembaga_pengangkatan' => 'Pemerintahan Pusat',
            'id_golongan' => '1',
            'sumber_gaji' => 'APBN',
            'nm_ibu' => fake()->name(),
            'stts_pernikahan' => fake()->randomElement(['Menikah', 'Belum Menikah']),
            'nm_suami_istri' => fake()->name(),
            'pekerjaan_suami_istri' => 'Nganggur',
            'tmt_pns' => fake()->date(),
            'lisensi_kepsek' => fake()->unique()->numerify('###-###-##'),
            'diklat_kepengawasan' => fake()->randomElement(['Ya', 'Tidak']),
            'npwp' => fake()->unique()->numerify('#######'),
            'kewarganegaraan' => 'Indonesia',
            'foto' => 'https://source.unsplash.com/random',
        ];
    }
}
