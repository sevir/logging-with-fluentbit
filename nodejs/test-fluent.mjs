import Transport from 'winston-tcp'
import winston from 'winston'

let logger = new(winston.Logger)({
  transports: [
    new(Transport)({
      host: '127.0.0.1',
      port: 5170,
      json: true,
      timestamp: true
    })
  ]
})

for (var i = 0; i < 200000; i++) {
  logger.log('info', 'foo')
}