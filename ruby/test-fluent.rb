require 'rubygems'
require 'bundler/setup'

require 'logstash-logger'

tcp_logger = LogStashLogger.new(type: :tcp, host: '127.0.0.1', port: 5170, sync: true)

for i in 0..10000 do
    tcp_logger.info 'test'
end