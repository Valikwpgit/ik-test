#!/usr/bin/perl

use strict;
use warnings;

my $filename = $ARGV[0];

open my $file, '<', $filename or die "Could not open file '$filename' $!";
my $app_url = $ARGV[1] || die "APP_URL not provided";
my $app_path = $ARGV[2] || die "APP_PATH not provided";
my $content = do { local $/; <$file> };


# Знайдемо всі URL за допомогою патерну
my @urls = $content =~ /INSERT INTO `wp_options` \(.*?'siteurl',\s*'([^']+)'.*?\)/gs;
# Знайти шлях перед /wp-content/
my $path;
LINE: while ($content =~ m|(["'])([^"'\s>]*?)/wp-content/|g) {
    my $quote = $1;
    $path = $2; # Змінюємо значення змінної, яку оголосили поза циклом

    # Відкидаємо все, що лівіше від кавички
    $path =~ s/.*\Q$quote\E//;

    # Зупиняємося перед одинарною чи подвійною кавичкою
    $path =~ s/[^\/]+["'].*//;

    # Пропускаємо, якщо це адрес домена (http або https)
    next if $path =~ m{^(?:https?:)?//};

    # Виходимо з циклу
    last LINE;
}


# Проведемо заміну всіх PATH
foreach my $url (@urls) {
    if ($url) {
        $content =~ s|\Q$url\E|$app_url|g;
    }
}
# Проведемо заміну всіх URL
foreach my $path_line ($path) {
    if ($path_line) {
        $content =~ s|\Q$path_line\E|$app_path|g;
    }
}



close $file;


open my $file_out, '>', $filename or die "Could not open file '$filename' $!";
print $file_out $content;
close $file_out;

#print "Found File: $filename\n";
#print "Found URLs: @urls\n";
#print "Found absolute path: $path\n";
