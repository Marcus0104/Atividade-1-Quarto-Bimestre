<?php
$dormir = readline("Você dormiu que horas essa noite(obs:coloque o horário em formato 24h e números inteiros)? ");
$acordar = readline("Você pretende acordar que horas essa manhã(obs:coloque o horário em formato 24h e números inteiros)? ");

$media = ($acordar + 24) - $dormir;
$tempo_perdido = (10 + 30 + 20) / 60;

print("considerando 30 minutos em média de mexer no celular antes de dormir, 10 para dormir e lenvantar uma vez durante a noite e mais 10 para voltar a dormir\n");
$tempo_aproximado = $media - $tempo_perdido;
print("\nVocê dormiu aproximadamente " . $tempo_aproximado . " horas essa noite.\n");

if ($tempo_aproximado > 7) {
    print("\033[32mVocê teve uma excelente noite de sono!!!\033[0m\n");
} elseif ($tempo_aproximado > 5) {
    print("\033[33mVocê teve uma boa noite de sono!\033[0m\n");
} else {
    print("\033[31mVocê não teve uma péssima noite de sono, tente usar menos o celular antes de dormir!\033[0m\n");
}
