desc 'Actualizar tema en jse.txorua.com'
task :deploy_to_txorua do
  puts 'Actualizando tema en jse.txorua.com'
  user = 'txorua'
  server = 'txorua.com'
  path = 'mis_apps/jse/sites/all/themes/elkano500v1/'
  sh "rsync -rtzh --delete --exclude=.git/ --exclude=Rakefile --exclude=.gitignore . #{user}@#{server}:#{path}"
  puts 'Tema actualizado'
end

