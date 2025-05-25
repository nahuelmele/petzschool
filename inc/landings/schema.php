<!--script defer type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": <?= json_encode($tit) ?>,
    "datePublished": <?= json_encode($datePublished) ?>,
    "dateModified": <?= json_encode($dateModified) ?>,
    "publisher": {
        "@type": "Organization",
        "name": "Petz School",
        "logo": {
            "@type": "ImageObject",
            "url": "https://petzschool.com/img/logo-petz-school.png",
            "width": 214,
            "height": 98
        },
        "sameAs": [
            "https://www.facebook.com/petzschool/",
            "https://www.instagram.com/petz.school/"
        ]
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://petzschool.com"
    },
    "author": {
        "@type": "Person",
        "name": <?= json_encode($autor) ?>
    },
    "description": <?= json_encode($des) ?>,
    "image": {
        "@type": "ImageObject",
        "url": "https://petzschool.com/img/landings/<?= $dirLanding ?>/<?= $imgShare ?>",
        "width": 600,
        "height": 300
    }
}
</script-->