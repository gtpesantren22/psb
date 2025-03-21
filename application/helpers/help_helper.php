<?php

function rupiah($rp)
{
    if ($rp != null) {
        return 'Rp. ' . number_format($rp, 0, ',', '.');
    } else {
        return 'Rp. ' . number_format(0, 0, ',', '.');
    }
}

function bulan($bulan)
{
    switch ($bulan) {
        case 0:
            $bulan = "";
            break;
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
        default:
            $bulan = Date('F');
            break;
    }
    return $bulan;
}

function tanggalIndo($tanggal)
{
    $a = explode('-', $tanggal);
    $tanggal = $a['2'] . " " . bulan($a['1']) . " " . $a['0'];
    return $tanggal;
}

function tanggalIndo2($tanggal)
{
    $a = explode('-', $tanggal);
    $tanggal = $a['0'] . " " . bulan($a['1']) . " " . $a['2'];
    return $tanggal;
}

// Ok

function kirim_person($key, $no_hp, $pesan)
{
    $curl2 = curl_init();
    curl_setopt_array(
        $curl2,
        array(
            CURLOPT_URL => 'http://191.101.3.115:3000/api/sendMessage',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'apiKey=' . $key . '&phone=' . $no_hp . '&message=' . $pesan,
        )
    );
    $response = curl_exec($curl2);
    curl_close($curl2);
}

function kirim_group($key, $id_group, $pesan)
{
    $curl2 = curl_init();
    curl_setopt_array(
        $curl2,
        array(
            CURLOPT_URL => 'http://191.101.3.115:3000/api/sendMessageGroup',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'apiKey=' . $key . '&id_group=' . $id_group . '&message=' . $pesan,
        )
    );
    $response = curl_exec($curl2);
    curl_close($curl2);
}

function kirim_tmp($apiKey, $no_hp, $title, $desc, $isi, $link_logo, $link)
{
    $curl2 = curl_init();
    curl_setopt_array(
        $curl2,
        array(
            CURLOPT_URL => 'http://191.101.3.115:3000/api/sendAdReplyMessage',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'apiKey=' . $apiKey . '&phone=' . $no_hp . '&title=' . $title . '&desc=' . $desc . '&body_message=' . $isi . '&url_file=' . $link_logo . '&url=' . $link,
        )
    );
    $response = curl_exec($curl2);
    curl_close($curl2);

    return $response;
}

function addContact_to_group($key, $no_hp, $id_group)
{
    $curl2 = curl_init();
    curl_setopt_array(
        $curl2,
        array(
            CURLOPT_URL => 'http://191.101.3.115:3000/api/addParticipantGroup',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'apiKey=' . $key . '&id_group=' . $id_group . '&phone=' . $no_hp,
        )
    );
    $response = curl_exec($curl2);
    curl_close($curl2);
}

function gel($gel)
{
    $nm = array(0, 80000, 130000, 180000);
    return $nm[$gel];
}

function linkGroup($gel)
{
    $nm = array('', 'https://chat.whatsapp.com/CWmP8eFenvk9kSCQQepMC6', 'https://chat.whatsapp.com/IqBWCvrlG7N7ot5Os49a4s', 'https://chat.whatsapp.com/CNgZbOjQp58A2fuSR8e6X1');
    return $nm[$gel];
}

function rmRp($string)
{
    return preg_replace("/[^0-9]/", "", $string);
}

function check($arr)
{
    $ok = "
    <i class='text-success'><svg xmlns='http://www.w3.org/2000/svg'
                                            class='icon icon-tabler icon-tabler-check' width='24' height='24'
                                            viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none'
                                            stroke-linecap='round' stroke-linejoin='round'>
                                            <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
                                            <path d='M5 12l5 5l10 -10'></path>
                                        </svg>
                                    </i>
    ";
    $no = "
    <i class='text-danger'><svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-square-x' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
   <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
   <rect x='4' y='4' width='16' height='16' rx='2'></rect>
   <path d='M10 10l4 4m0 -4l-4 4'></path>
</svg>
                                    </i>
    ";

    $isi = array($no, $ok);
    return $isi[$arr];
}

function random($panjang)
{
    $karakter = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter[$pos];
    }
    return $string;
}

function generateRandomString($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}
// KotaModel

function aksesEndpoint($url, $token, $data = [])
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url); // Endpoint URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $token",  // Set Bearer Token
        "Content-Type: application/json" // Set content type as JSON
    ]);

    // If data is provided, set it as POST request with JSON payload
    if (!empty($data)) {
        curl_setopt($ch, CURLOPT_POST, true); // Set method to POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Add JSON data
    }

    // Execute request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        return false;
    }

    // Close cURL session
    curl_close($ch);

    // Decode JSON response to PHP array
    return json_decode($response, true);
}
