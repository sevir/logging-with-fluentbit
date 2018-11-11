import winston from 'winston';

var logger = new winston.Logger({
  transports: [
    new winston.transports.File({
      filename: './myfile.log',
      json: true
    })
  ],
  exitOnError: false
});

for(var i=0;i<200000;i++){
  logger.log('info', 'foo')
}