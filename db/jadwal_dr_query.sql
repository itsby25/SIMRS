SELECT dpjp.nama_dokter,dpjp."status",dpjp.no_sip,jadwal_praktek.jam_praktek,jadwal_praktek.hari_praktek,jadwal_praktek.shift,layanan.kd_layanan,layanan.nama_layanan FROM dpjp 
JOIN jadwal_praktek ON dpjp.no||'' = jadwal_praktek.dpjp
JOIN layanan ON dpjp.jenis_praktek = layanan.no ||''