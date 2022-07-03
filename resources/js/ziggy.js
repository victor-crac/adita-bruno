const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"showLoginForm":{"uri":"login","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["POST"]},"logout":{"uri":"logout","methods":["POST"]},"showRegisterForm":{"uri":"register","methods":["GET","HEAD"]},"register":{"uri":"register","methods":["POST"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"dashboard":{"uri":"dashboard","methods":["GET","HEAD"]},"campaigners.index":{"uri":"dashboard\/campaigner","methods":["GET","HEAD"]},"campaigns.index":{"uri":"dashboard\/causes","methods":["GET","HEAD"]},"campaigns.create":{"uri":"dashboard\/causes\/create","methods":["GET","HEAD"]},"campaigns.store":{"uri":"dashboard\/causes\/store","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
