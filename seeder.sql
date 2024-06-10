
INSERT INTO users (sekolah_id, username, password, nama, role)
VALUES (0, 'admin', SHA1('admin'), 'ADMIN DINAS 1', 'ADMIN'), (0, 'admin2', SHA1('admin'), 'ADMIN DINAS 2', 'ADMIN');

INSERT INTO users (sekolah_id, username, password, nama, role)
VALUES (
        1,
        'staftu1',
        SHA1('staftu1'),
        'Staf TU 1 Sekolah 1',
        'STAFT TU'
    ),
    (
        2,
        'staftu2',
        SHA1('staftu2'),
        'Staf TU 2 Sekolah 2',
        'STAFT TU'
    ),
    (
        3,
        'staftu3',
        SHA1('staftu3'),
        'Staf TU 3 Sekolah 3',
        'STAFT TU'
    ),
    (
        4,
        'staftu4',
        SHA1('staftu4'),
        'Staf TU 4 Sekolah 4',
        'STAFT TU'
    ),
    (
        5,
        'staftu5',
        SHA1('staftu5'),
        'Staf TU 5 Sekolah 5',
        'STAFT TU'
    ),
    (
        1,
        'guru1',
        SHA1('guru1'),
        'Guru 3 Sekolah 1',
        'GURU'
    ),
    (
        2,
        'guru2',
        SHA1('guru2'),
        'Guru 1 Sekolah 2',
        'GURU'
    ),
    (
        3,
        'guru3',
        SHA1('guru3'),
        'Guru 1 Sekolah 3',
        'GURU'
    ),
    (
        4,
        'guru4',
        SHA1('guru4'),
        'Guru 1 Sekolah 4',
        'GURU'
    ),
    (
        5,
        'guru5',
        SHA1('guru5'),
        'Guru 1 Sekolah 5',
        'GURU'
    );


INSERT INTO sekolah (nama, alamat, telepon, email)
VALUES (
        'Sekolah Dasar Negeri 1',
        'Jl. Merdeka No. 1, Kota A',
        '021-1234567',
        'sdn1@email.com'
    ),
    (
        'Sekolah Dasar Negeri 2',
        'Jl. Pemuda No. 2, Kota B',
        '021-2345678',
        'sdn2@email.com'
    ),
    (
        'Sekolah Dasar Negeri 3',
        'Jl. Keadilan No. 3, Kota C',
        '021-3456789',
        'sdn3@email.com'
    ),
    (
        'Sekolah Dasar Negeri 4',
        'Jl. Kemerdekaan No. 4, Kota D',
        '021-4567890',
        'sdn4@email.com'
    ),
    (
        'Sekolah Dasar Negeri 5',
        'Jl. Perjuangan No. 5, Kota E',
        '021-5678901',
        'sdn5@email.com'
);


INSERT INTO guru (sekolah_id, nama, nip, mata_pelajaran)
VALUES (1, 'Guru 1 Sekolah 1', 'NIP1111', 'Matematika'),
    (
        1,
        'Guru 2 Sekolah 1',
        'NIP1112',
        'Bahasa Indonesia'
    ),
    (1, 'Guru 3 Sekolah 1', 'NIP1113', 'Biologi'),
    (1, 'Guru 4 Sekolah 1', 'NIP1114', 'Fisika'),
    (2, 'Guru 1 Sekolah 2', 'NIP2111', 'Kimia'),
    (2, 'Guru 2 Sekolah 2', 'NIP2112', 'Sejarah'),
    (2, 'Guru 3 Sekolah 2', 'NIP2113', 'Geografi'),
    (2, 'Guru 4 Sekolah 2', 'NIP2114', 'Ekonomi'),
    (3, 'Guru 1 Sekolah 3', 'NIP3111', 'Sosiologi'),
    (3, 'Guru 2 Sekolah 3', 'NIP3112', 'Seni Budaya'),
    (
        3,
        'Guru 3 Sekolah 3',
        'NIP3113',
        'Bahasa Inggris'
    ),
    (
        3,
        'Guru 4 Sekolah 3',
        'NIP3114',
        'Pendidikan Jasmani'
    ),
    (
        4,
        'Guru 1 Sekolah 4',
        'NIP4111',
        'Teknologi Informasi'
    ),
    (
        4,
        'Guru 2 Sekolah 4',
        'NIP4112',
        'Kewirausahaan'
    ),
    (4, 'Guru 3 Sekolah 4', 'NIP4113', 'Akuntansi'),
    (
        4,
        'Guru 4 Sekolah 4',
        'NIP4114',
        'Administrasi Perkantoran'
    ),
    (5, 'Guru 1 Sekolah 5', 'NIP5111', 'Multimedia'),
    (
        5,
        'Guru 2 Sekolah 5',
        'NIP5112',
        'Teknik Komputer'
    ),
    (
        5,
        'Guru 3 Sekolah 5',
        'NIP5113',
        'Rekayasa Perangkat Lunak'
    ),
    (
        5,
        'Guru 4 Sekolah 5',
        'NIP5114',
        'Sistem Informasi'
    );