<?php

$ch = curl_init('https://core-api.icarros.com.br/pj/v1/core/database/makes');

curl_setopt(
    $ch, 
    CURLOPT_HTTPHEADER,
    array(
        'Authorization: Bearer eyJhbGciOiJSUzI1NiJ9.eyJqdGkiOiIwZTQ0ZWRhYi1lNTNmLTRmOTgtOTNlYy1jYzBmOGViM2FiNGYiLCJleHAiOjE2MDYzOTQ0NDgsIm5iZiI6MCwiaWF0IjoxNjA2MzkwODQ4LCJpc3MiOiJodHRwczovL2FjY291bnRzLmljYXJyb3MuY29tL2F1dGgvcmVhbG1zL2ljYXJyb3MiLCJhdWQiOiJncnVwb3ZpdmlhbmUiLCJzdWIiOiJhNTViNGExYS0wMmJmLTRmMWItOWI4Yi01YjBiNjJiODhjY2YiLCJ0eXAiOiJCZWFyZXIiLCJhenAiOiJncnVwb3ZpdmlhbmUiLCJzZXNzaW9uX3N0YXRlIjoiZTQzYjI1MzMtMTc4My00ODFmLTk1YjQtZDE0NTIxNDkyY2E3IiwiY2xpZW50X3Nlc3Npb24iOiI1ZThjNjFkMC03MDczLTQyNWEtYjEzMS1mZmNhMDhjMTY2NDQiLCJhbGxvd2VkLW9yaWdpbnMiOlsiaHR0cDovL3ZpdmlhbmlzZW1pbm92b3MuY29tLmJyIl0sInJlc291cmNlX2FjY2VzcyI6eyJpY2Fycm9zLXdlYmFwcCI6eyJyb2xlcyI6WyJ1c3Vhcmlvc2l0ZSIsImFudW5jaWFudGVwaiJdfX0sIm5hbWUiOiIgIiwicHJlZmVycmVkX3VzZXJuYW1lIjoiZ2l1bGlhbmFAdml2aWFuaS5jb20uYnIiLCJnaXZlbl9uYW1lIjoiIiwiZW1haWwiOiJnaXVsaWFuYUB2aXZpYW5pLmNvbS5iciJ9.cbdvmO7q5xsXEaD9O3x7voQW3klDUClXhKZiCJn1LI1pRAYOErCZTVHaZcbladuSwfkb_XWTZhtu6kPBG-wINKSmIBDtAfEJ7ZOdgKWPgOktr-BUovX-ady6jpTOGwY6imUrzWjAABI15ohcQEWeN5YThpsB9faExhWWZhXnozJtflAw5dAkSrS0iWEKCZYv9MpSC2xNH0TMu2k4NzNLPvOCKlDgnh7JwRuj5GhhDlBhBZQSgFxH1yf2BbQdp5V0XezVUovi3WT9RdG-X6Izotd2r7pMYae9CUujskTRXkmYN5TP_606HbfQG6g_6_DTIZku1i52Qx8DEsNTTJwuRw',
        'Content-Type: application/json'
    )
);
curl_setopt($ch, CURLOPT_VERBOSE, true);

$response = curl_exec($ch);

if ($response === FALSE) {
    printf("cUrl error (#%d): %s<br>\n", curl_errno($ch),
           htmlspecialchars(curl_error($ch)));
}

curl_close($ch);