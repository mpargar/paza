
export default function Route (str) {
  const matchRoute = (route() === str)
  return {
    use (Instance) {
      if (matchRoute) Instance.init()
    }
  }
}
