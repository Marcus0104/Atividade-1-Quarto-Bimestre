<?php
$intervalo_min = readline("digite um número de intervalo minímo: ");
$intervalo_max = readline("digite um número de intervalo maxímo: ");

$tentativas = 1;
$Numero_sorteado = rand($intervalo_min, $intervalo_max);

$chute_num = (int) readline("chute um número entre $intervalo_min e $intervalo_max: ");

while ($chute_num != $Numero_sorteado) {
    print("\033[31mVocê errou!!\033[0m\n");

    $Numero_sorteado = rand($intervalo_min, $intervalo_max);
    $chute_num = (int) readline("chute um número entre $intervalo_min e $intervalo_max: ");
    $tentativas++;
}
print("\033[32mVocê acertou o número!!\033[0m\n");
print("\033[32mNúmero de tentativas: $tentativas\033[0m\n");
