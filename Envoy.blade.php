@servers(['web' => 'hansdebecker@ssh1.ulyssis.org'])

@task('list', [on => 'web'])
    ls -l
@endtask
